import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:shop/pages/checkout.dart';
import 'package:shop/storage/cart_storage.dart';
import 'package:shop/theme/style.dart';
import 'package:shop/values/colors/colors.dart';
import 'package:shop/widgets/app_bar.dart';
import 'package:shop/widgets/products/cart_item.dart';
import "package:http/http.dart" as http;



var client = http.Client();

class Cart extends StatefulWidget{
  const Cart({Key? key}) : super(key: key);

  @override
  State<StatefulWidget> createState() {
    // TODO: implement createState
    return CartState();

  }
  
}
class CartState extends State<Cart>{

  String get title => "Cart";

  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    return Scaffold(
        extendBodyBehindAppBar: true,
        extendBody: true,
        appBar: createAppbar("Your Cart",context),
        body: Container(
            alignment: Alignment.bottomLeft,
            padding: const EdgeInsets.all(6),
            child:ListView(
              children: CartStorage.cartWidgets,
            )
        ),

      bottomSheet:Container(
        height: 150,
        padding: const EdgeInsets.all(12),
        child:ListView(children: [

          Container(
            alignment: Alignment.centerLeft,
            child: Row(
              mainAxisAlignment: MainAxisAlignment.spaceAround,
              crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: const [
                Text("Sub Total",style: cartItemCostTextStyle,),
                Text("199000",style: cartItemNameTextStyle,)
              ],),


              Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: const [
                  Text("Delivery Fee",style: cartItemCostTextStyle,),
                  Text("199000",style: cartItemNameTextStyle,)
                ],),

              Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: const [
                  Text("Total ",style: cartItemCostTextStyle,),
                  Text("199000",style: cartItemNameTextStyle,)
                ],),



            ],
          ),),
          GestureDetector(child:  Container(
            decoration: BoxDecoration(borderRadius: BorderRadius.circular(5),color: cartIconColor),
            alignment: AlignmentDirectional.center,
            margin: const EdgeInsets.only(top: 5),
            height: 50,
            width: double.maxFinite,
            child: const Text("Continue to Checkout",style: TextStyle(color: Colors.white),),
          ) ,

            onTap: (){
              var toCheckout = MaterialPageRoute(builder: (context){
                return Checkout();
              });

              Navigator.push(context, toCheckout);
            },

          ),
        ],)
      ) ,

    ) ;
  }
  
}

Future<Widget> getItems() async{
  double totalBill = 0;
  for(CartItem item in CartStorage.cartWidgets.cast()){
    double price = item.price;
    double  itemTotalCost = price*item.itemCount;
    totalBill = totalBill+itemTotalCost;

  }

  return Text("Your totalBill is UGX$totalBill",style: const TextStyle(fontSize:23),);


}