import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:shop/theme/style.dart';
import 'package:shop/values/colors/colors.dart';
import 'package:shop/values/dimen.dart';
import 'package:shop/widgets/app_bar.dart';

class ProductDetails extends StatefulWidget{
  @override
  State<StatefulWidget> createState() {
    // TODO: implement createState
    return ProductDetailsState();
  }
  
}
class ProductDetailsState extends State<ProductDetails>{
  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
        extendBodyBehindAppBar: true,
        extendBody: true,
        appBar: createAppbar("Page",context),
        body: Container(
            alignment: Alignment.bottomLeft,
            padding: const EdgeInsets.all(6),

          child: ListView(
            children: [

              Container(
                decoration: const BoxDecoration(color: Colors.white),
                child: Column(
                  children: [
                    SizedBox(
                        height: 200,
                        child: PageView(
                      onPageChanged: (currentPage){
                        print("Page changed to $currentPage ");
                      },
                      children: [
                         SizedBox(width: 100,child: Image.asset("assets/images/image_1.jpg"),),
                        SizedBox(width: 100,child: Image.asset("assets/images/image_2.jpg"),),
                        SizedBox(width: 100,child: Image.asset("assets/images/image_3.jpg"),)
                      ],
                    ),
                    ),

                  ],
                )
              ),

              Container(
                padding: const EdgeInsets.all(5),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  mainAxisAlignment: MainAxisAlignment.start,
                children: [
                  const Text("Tomatoes",style: productCostTextStyle,),
                  const TextField(
                    decoration: InputDecoration(
                        border:OutlineInputBorder(
                            borderSide:BorderSide(width: 2.0)
                        ),hintText: "Name" ),
                  ),



                  Container(
                    margin: const EdgeInsets.only(top: 10),
                    child: DropdownButtonFormField<String>(
                      decoration: const InputDecoration(border: OutlineInputBorder(borderSide: BorderSide(width: 1))),
                      items: <String>["Kampala","Nanasana","Muyenga"].map((String value) {
                        return DropdownMenuItem<String>(
                          value: value,
                          child: Text(value.toString()),
                        );
                      }).toList(), onChanged:(object){

                  }),
                  ),


                ],

              ),
              )

            ],
          ),
            )
        ,bottomSheet: Container(
      padding: EdgeInsets.all(12),
      child: Container(
      decoration: BoxDecoration(borderRadius: BorderRadius.circular(5),color: cartIconColor),
      alignment: AlignmentDirectional.center,
      margin: const EdgeInsets.only(top: 5),
      height: 50,
      width: double.maxFinite,
      child: const Text("Add to cart",style: TextStyle(color: Colors.white),),
    ) ,
    ),
    );
  }
  
}