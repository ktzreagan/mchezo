import 'package:flutter/material.dart';
import 'package:shop/widgets/app_bar.dart';
import 'package:shop/widgets/products/category/category.dart';
import 'package:shop/widgets/products/product.dart';

class ProductsCategoryPage extends StatefulWidget{
  String title = "Products";

  @override
  State<StatefulWidget> createState() {
    // TODO: implement createState
    return ProductsCategoryPageState();
  }
  
}
class ProductsCategoryPageState extends State<ProductsCategoryPage>{

  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
      extendBodyBehindAppBar: true,
      extendBody: true,
      appBar: createAppbar("Categories",context),
      body: Container(
        alignment: Alignment.bottomLeft,
        padding: const EdgeInsets.all(6),
        child:ListView(
              children: [
                createCategorySection(
                    "Games",
                    [
                     createProduct(context,name: "Ludo(For all people today)", price:2000, image: "assets/images/image_2.jpg",hasBadge:true ),
                      createProduct(context,name: "Sweets(For all people today)", price:2000, image: "assets/images/image_1.jpg"),
                      createProduct(context,name: "Sweets(For all people today)", price:2000, image: "assets/images/image_4.jpg",hasBadge:true),
                    ],
                    context
                ),

                createCategorySection(
                    "Grocery",
                    [
                      createProduct(context,name: "Fruits(For all people today)", price:2000, image: "assets/images/image_2.jpg",hasBadge: false),
                      createProduct(context,name: "Fruits(For all people today)", price:2000, image: "assets/images/image_3.jpg",hasBadge: true),
                      createProduct(context,name: "Cados(For all people today)", price:2000, image: "assets/images/image_1.jpg"),
                    ],
                    context
                ),

                createCategorySection(
                    "Drinks",
                    [
                      createProduct(context,name: "Fruits(For all people today)", price:2000, image: "assets/images/image_3.jpg",hasBadge: true),
                      createProduct(context,name: "Fruits(For all people today)", price:2000, image: "assets/images/image_4.jpg",hasBadge: false),
                      createProduct(context,name: "Cados(For all people today)", price:2000, image: "assets/images/image_1.jpg"),
                    ],
                    context
                ),

              ],
        )
        )
      );

  }
  
}