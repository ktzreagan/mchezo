import 'dart:convert';
import 'dart:io';
import 'dart:ui';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:shop/models/cart_model.dart';
import 'package:shop/pages/product_details.dart';
import 'package:shop/storage/cart_storage.dart';
import 'package:shop/theme/style.dart';
import 'package:shop/values/attributes.dart';
import 'package:shop/values/dimen.dart';
import 'package:shop/values/status_values.dart';
import 'package:shop/widgets/products/cart_item.dart';
import 'package:http/http.dart' as http;


Widget createProduct(BuildContext context,{String id="",String name="",double price=0.0,String image="",bool hasBadge=false}){
  return  GestureDetector(child: Container(
    decoration: BoxDecoration(color: Colors.white,borderRadius: productBorderRadius),
    alignment: Alignment.bottomLeft,
    height:containerHeight,
    width: productContainerWidth,
    padding: const EdgeInsets.all(rowPadding),
    margin:const EdgeInsets.all(rowMargin),
    child: Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      mainAxisAlignment: MainAxisAlignment.end,
      children: [
        Container(
          height: hasBadge?19:0,
          margin: EdgeInsets.only(bottom: badgePadding),
          child: const Text("Special Offer",style: TextStyle(color: Colors.white,fontSize: 10),),
          decoration: BoxDecoration(color: Colors.orange,borderRadius: BorderRadius.circular(3)),
          padding: const EdgeInsets.all(4),
        ),
        Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          mainAxisAlignment: MainAxisAlignment.start,
          mainAxisSize: MainAxisSize.max,
          children: [

            Container(
                alignment: Alignment.center,
                height: imageContainerHeight,width: double.maxFinite,
              child:Stack(
                children: [
                Image.network("http://10.0.2.2/mchezo/images/$image"),

              ],
              )
            ),
            Text(name,style: productNameTextStyle,textAlign: TextAlign.left),
            Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children:[
              Text("$price",style: productCostTextStyle),
              Text("${price}",style: crossedProductCostTextStyle),
            ],)
          ],
        )
      ],
    ),
  ),

    onTap:() async {
     // onItemSelect(id,name,price,image,context);

     // showItemDetails(context);
    },


  );
}





onItemSelect(String _id, String name, double price,String image,BuildContext context) {
  var cartItemModel = CartModel();
  {
    showModalBottomSheet(context: context, builder: (context){
      numberOfItems++;
      if(!chosenItems.containsKey(name)){
        chosenItems.addAll({name:price});
      }else{
        chosenItems.remove(name);
      }

      Widget column = ListView();

      bool itemExits = false;
      for(CartItem cartItem in CartStorage.cartWidgets.cast()){
        if(cartItem.name == CartItem(_id, name, price,image).name){
          itemExits = true;
        }
      }

      if(!itemExits){
        CartStorage.cartWidgets.add(CartItem(_id, name, price,image));
      }

      column = ListView(children: CartStorage.cartWidgets,);
      return Container(
        margin: EdgeInsets.zero,
        alignment: Alignment.centerLeft,
        child: column,
        padding: const EdgeInsets.all(5),
      );
    });
  }
}



void showItemDetails(BuildContext context){
  var toItemDetails =  MaterialPageRoute(builder: (context){
    return ProductDetails();
  });
  Navigator.push(context, toItemDetails);
}



