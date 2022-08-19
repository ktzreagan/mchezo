import "package:flutter/material.dart";
import 'package:shop/pages/product_categories.dart';
import 'package:shop/pages/single_category_page.dart';
import 'package:shop/theme/style.dart';
import '../values/values.dart';
import '../values/colors/colors.dart';

Widget createDashboardCard(String label, IconData icon,BuildContext context){

  return Card(
    elevation: 0,
    child: SizedBox(
    width: 200,
    height: 250,
    child: GestureDetector(
    child: Column(
      mainAxisAlignment: MainAxisAlignment.center,
    children: [
     Container(
       padding: const EdgeInsets.all(23),
       child:Icon(
       icon,
       color: iconColor,
       size: 50,
       ),
     ),
      Text(
          label,
          style:productCostTextStyle
      )
    ],
  ),

      onTap: (){
      Widget  page = SingleCategoryPage(label);
      if(label.contains("All")){
        page = ProductsCategoryPage();
      }
        PageRouteBuilder pageRouteBuilder = PageRouteBuilder(pageBuilder:
            (BuildContext context, Animation animation,
            Animation secondaryAnimation) {
              return page;
        });
        Navigator.push(
          context,
          pageRouteBuilder,
        );

      },
    ),
  ),
  );
}