import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:provider/provider.dart';
import 'package:shop/models/cart_model.dart';
import 'package:shop/values/colors/colors.dart';
import 'package:shop/widgets/dashboard.dart';

void main() {

  runApp(
      ChangeNotifierProvider<
          CartModel>(create: (context)=>CartModel()
        ,child: MyApp(),
      )
  );
  SystemChrome.setSystemUIOverlayStyle(const SystemUiOverlayStyle(
    statusBarIconBrightness: Brightness.light,
      statusBarBrightness: Brightness.dark,
      statusBarColor: systemColor,
      systemNavigationBarContrastEnforced: true,
      systemNavigationBarIconBrightness: Brightness.dark,
      systemNavigationBarColor: Colors.white
  )
  );
}

class MyApp extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return _MyApp();
  }
}


class _MyApp extends State{
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'E-Shop',
      theme: ThemeData(
          primarySwatch: systemColor,
          navigationBarTheme: const NavigationBarThemeData(backgroundColor: Colors.white)
      ),
      home:  const MyHomePage(title: 'E-Shop'),
    );
  }

}

class MyHomePage extends StatefulWidget {
   const MyHomePage({Key? key, required this.title}) : super(key: key);
     final String title;

  @override
  State<MyHomePage> createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  int count = 1;


  @override
  Widget build(BuildContext context) {
     return Scaffold(
      appBar: AppBar(
        systemOverlayStyle: const SystemUiOverlayStyle(systemNavigationBarColor: Colors.white),
        backgroundColor: systemColor,
        elevation: 0,
        centerTitle: true,
           title: Text(widget.title,style: const TextStyle(fontSize: 26),),
      ),
      body: Container(
        padding: const EdgeInsets.all(7),
          child: GridView(
              gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
                crossAxisCount: 2,
                childAspectRatio: 0.9
              ),
            children: [
              createDashboardCard("All Categories", Icons.shop_rounded,context),
              createDashboardCard("Drinks", Icons.local_drink,context),
              createDashboardCard("Games", Icons.games,context),
              createDashboardCard("Foods", Icons.fastfood,context),
              createDashboardCard("Cakes", Icons.cake,context),
              createDashboardCard("Parties", Icons.party_mode,context),
              createDashboardCard("Light", Icons.light,context),
            ],
          ),
      ),
       drawer: Drawer(
         backgroundColor: systemColor,
         child: ListView(children: const  [
         Text("Item One")
       ],),),
       bottomNavigationBar: BottomNavigationBar(
         currentIndex: 1,
         type: BottomNavigationBarType.fixed,
         selectedItemColor: systemColor,
         items: const [
           BottomNavigationBarItem(icon: Icon(Icons.home),label: "Home"),
           BottomNavigationBarItem(icon: Icon(Icons.message),label: "Message"),
           BottomNavigationBarItem(icon: Icon(Icons.person),label: "Account"),
         ],
       ),
      );
  }
}
