import 'package:flutter/material.dart';
import 'package:shop/values/colors/colors.dart';
import 'package:shop/values/dimen.dart';
/*
* This section contains all style values for the application
* */


/*
* Text Styles
* */

const  productCostTextStyle = TextStyle(fontSize: productCostFontSize,fontWeight: FontWeight.bold,decorationThickness:2 );
const  crossedProductCostTextStyle = TextStyle(
    fontSize: crossedProductCostFontSize,
    fontWeight: FontWeight.w300,
    decoration: TextDecoration.lineThrough,
    decorationThickness:1.3
);


const  productNameTextStyle = TextStyle(fontSize: productNameFontSize,fontWeight: FontWeight.normal,overflow: TextOverflow.ellipsis);

const cartItemCostTextStyle = TextStyle(fontSize:cartItemCostFontSize,fontWeight: FontWeight.bold);
const cartItemNameTextStyle = TextStyle(fontSize: cartItemCostFontSize,fontWeight: FontWeight.normal);



/*
*Box Decorations
* */

const cartItemImageBoxDecoration = BoxDecoration(color: placeholderProductBgColor);
const cartItemTextSectionBoxDecoration = BoxDecoration(color: systemColor);



/*
* FontStyles
* */





