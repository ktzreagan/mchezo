import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:shop/theme/style.dart';
import 'package:shop/values/attributes.dart';
import 'package:shop/values/colors/colors.dart';
import 'package:shop/values/dimen.dart';

class CartItem extends StatefulWidget{

  String id;
  String name;
  double price;
  String image;
  int itemCount = 1;

  CartItem(this.id, this.name, this.price,this.image, {Key? key}) : super(key: key);

  @override
  // ignore: no_logic_in_create_state
  State<StatefulWidget> createState() {
    var cartItemState = CartItemState(id, name, price,image);
    itemCount = cartItemState.itemCount;
    return cartItemState ;
  }

}


class CartItemState extends State<CartItem>{
  String id;
  String name;
  double price;
  String image;
  int itemCount = 1;

  CartItemState(this.id, this.name,this.price,this.image);

  @override
  Widget build(BuildContext context) {
    return createCartItem(id, name, price,image, context);
  }

  Widget createCartItem(String? _id,String name,double price,String image,BuildContext context){
    return Container(
      decoration: const BoxDecoration(color: Colors.white),
      margin: cartItemOuterMargin,
      alignment: Alignment.centerLeft,
      child:  Row(
        children: [
          Container(
            child: Image.asset(image),
            padding: const EdgeInsets.all(5),
            height: cartBoxHeight,
            width: cartBoxHeight,
          ),
          Container(
            alignment: Alignment.centerLeft,
            margin:cartItemInnerMargin,
            padding: cartItemPadding,
            width: 240,
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(name,style: cartItemNameTextStyle),
                Row(children: [
                  Text("$price",style: cartItemCostTextStyle),
                  GestureDetector(
                      onTap: (){

                      },
                      child: Container(margin:const EdgeInsets.all(9),
                        child: Text("X$itemCount",style:TextStyle(color: Colors.grey,fontSize: 15),),
                      )),
                  Container(margin:const EdgeInsets.all(9),
                      child: const Text("Remove",
                        style:TextStyle(color: Colors.red,fontSize: 15),
                      )
                  )
                ],),
                Row(
                  children:  [

                   GestureDetector(

                     onTap: (){
                       setState(() {
                         itemCount--;
                       });
                     },

                     child:  Container(
                     decoration: const BoxDecoration(shape: BoxShape.circle,color: iconColor),
                     height: 80,
                     child:const Icon(Icons.remove) ,width: 40,
                   ),),
                   GestureDetector(
                     onTap: ()=>setState(() {
                       itemCount++;
                     }),
                     child:  Container(
                     margin: const EdgeInsets.fromLTRB(14, 0, 0, 0),
                     decoration: const BoxDecoration(shape: BoxShape.circle,color: iconColor),
                     height: 80,
                     child:const Icon(Icons.add) ,width: 40,
                   ),)

                    /*Container(
               margin: const EdgeInsets.all(6),
               decoration: BoxDecoration(color: Colors.white),
               child:  const TextField(

             ),width: 150,
             ),*/


                  ],)
              ],
            ),
          )
        ],
      ),
    );
  }


}



