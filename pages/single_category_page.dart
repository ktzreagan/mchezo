import 'dart:convert';

import 'package:flutter/gestures.dart';
import 'package:flutter/material.dart';
import 'package:shop/widgets/app_bar.dart';
import 'package:shop/widgets/products/product.dart';
import 'package:http/http.dart'as http;
import  'package:lazy_load_scrollview/lazy_load_scrollview.dart';


class SingleCategoryPage extends StatefulWidget{
  String title = "Category";
  SingleCategoryPage(String title, {Key? key}) : super(key: key){
    title = title;
  }
  @override
  State<StatefulWidget> createState() {
    // TODO: implement createState
    // ignore: no_logic_in_create_state
    return SingleCategoryPageState(title);
  }
  
}
class SingleCategoryPageState extends State<SingleCategoryPage>{

  String title = "Category";
  int itemCount = 2;
  List<Map> dataList = [];
  SingleCategoryPageState(this.title);
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
        extendBodyBehindAppBar: true,
        extendBody: true,
        appBar: createAppbar("Page",context),
        body: LazyLoadScrollView(
          onEndOfPage: (){
            loadMoreItems();
          },
          child: RefreshIndicator(
              triggerMode: RefreshIndicatorTriggerMode.anywhere,
              onRefresh: () async {
               loadMoreItems();
              },
              child:GridView.builder(
                gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(crossAxisCount: 2,childAspectRatio: 0.60),
                itemCount: dataList.length,
                dragStartBehavior: DragStartBehavior.down,
                itemBuilder: (BuildContext context, int index) {

                  double price = 3000;

                  return createProduct(context, name:dataList[index]["name"],price: price,image:dataList[index]["images"].toString().split(",")[0] );
                    //createProduct(context,name:dataList[index]["name"],price:price,image: "assets/images/image_2.jpg",hasBadge: true);


                },
              )
          )
          ,
            )


    );



  }


  void loadMoreItems() async{
    var client = http.Client();
    var url = Uri.http("10.0.2.2", "mchezo/apis/mchezo.api.fetch.php",{
      'auth':"true",
      "fetch_items":"true",
      "count_from":"3",
      "count_to":"5"
    });

    var data = await client.post(url);

    client.close();

    setState(() {
      itemCount++;
    });

    var itemList = jsonDecode(utf8.decode(data.bodyBytes)) as List;

    for (var item in itemList) {
      setState(() {
        dataList.add(item as Map);
      });
    }
  }
  
}