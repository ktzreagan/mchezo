import 'dart:collection';

import 'package:flutter/material.dart';
import 'package:shop/widgets/products/cart_item.dart';

class CartModel extends ChangeNotifier{
  final List<CartItem> _items = [];

  UnmodifiableListView<CartItem> get items => UnmodifiableListView(_items);

  int get totalPrice => _items.length;
  void add(CartItem cartItem){
    _items.add(cartItem);
    notifyListeners();
  }


  void removeAll(){
    _items.clear();
    notifyListeners();
  }


}