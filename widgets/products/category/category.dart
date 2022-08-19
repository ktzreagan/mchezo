import 'package:flutter/material.dart';

import '../../../values/dimen.dart';
import '../product.dart';

Widget createCategorySection(String title,List<Widget> products,BuildContext context){


  return SizedBox(
    height: categorySectionHeight,
    child: Column(
    children: [
      Row(
        mainAxisAlignment: MainAxisAlignment.spaceBetween,
        children: [
          Text(title,style:const TextStyle(fontSize: categoryTitleFontSize,overflow: TextOverflow.ellipsis,fontWeight:FontWeight.bold ), ),
          Container(decoration: BoxDecoration(color: Colors.teal,borderRadius: BorderRadius.circular(5)),
            padding: const EdgeInsets.all(rowPadding),
            margin: const EdgeInsets.all(rowMargin),
            child: const Text("VIEW ALL",style:TextStyle(fontSize: 9,color: Colors.white),),),
        ],),
      Container(
          alignment: Alignment.centerLeft,
          height: containerHeight,
          child:ListView(
            scrollDirection: Axis.horizontal,
            children: products,
          )
      )
    ],
  ),);
}