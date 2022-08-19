import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:shop/pages/cart.dart';
import 'package:shop/values/colors/colors.dart';

AppBar  createAppbar(String pageName,BuildContext context){
  Widget appTitle;

  if(pageName=="Categories"){

    appTitle = Container(
        decoration: BoxDecoration(color: Colors.white,borderRadius:BorderRadius.circular(5)),
        height:45,
        width: 220,
        child: const CupertinoSearchTextField(placeholder: "Search Here..",
            placeholderStyle: TextStyle(fontWeight:FontWeight.bold
            ))
    );

  }else{
    appTitle = Text(pageName,style: const TextStyle(fontSize: 26),);
  }



  return AppBar(
      systemOverlayStyle: const SystemUiOverlayStyle(systemNavigationBarColor: Colors.white),
      backgroundColor: systemColor,
      actions: [
        GestureDetector(child: Stack(children: [
          Container(
            margin: const EdgeInsets.only(top: 8,right: 8,left:0 ),
            padding: const EdgeInsets.all(10),
            decoration: const BoxDecoration(color: Colors.orange,shape:BoxShape.circle),
            child: const Icon(Icons.add_shopping_cart),
          ),
          Container(
            margin: const EdgeInsets.only(bottom: 7,left: 27),
            padding:const  EdgeInsets.all(3),
            decoration: const BoxDecoration(color: Colors.red,shape:BoxShape.circle ),
            child: const Text("37",style: TextStyle(color: Colors.white,fontSize: 11),),
          )

        ],
        ),
          onTap: (){
          var toCart = MaterialPageRoute(builder: (context){

            return const Cart();

          });

          Navigator.push(context,toCart );


          },
        )
      ],
      elevation: 0,
      centerTitle: true,
      title: appTitle,
  );
}