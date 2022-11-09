import 'package:flutter/material.dart';
import 'package:practice_app/pages/page1.dart';
import 'package:practice_app/pages/page2.dart';

void main() {
  runApp(MaterialApp(
    home: Home(),

  ));
}

// void _onItemTapped(int index) {
//   setState(() {
//     _selectedIndex = index;
//   });
// }

class Home extends StatefulWidget{

  @override
  Home_state createState() => Home_state();
}

class Home_state extends State<Home>{
  final _widgetOptions =[
    page1(),
    page2(),
    ];
  int _currentindex = 0;
  @override
  Widget build(BuildContext context){
    return Scaffold(
      appBar: AppBar(
        title: Text("Focus App"),

      ),
      body: Center(
        child: _widgetOptions[_currentindex],
      ),
      bottomNavigationBar: BottomNavigationBar(
        currentIndex:_currentindex ,
        type: BottomNavigationBarType.fixed,
        selectedFontSize: 20,
        unselectedFontSize: 13,
        items: [
        BottomNavigationBarItem(icon: Icon(Icons.timer), label : 'Pomodoro'),
        BottomNavigationBarItem(icon: Icon(Icons.bedtime), label : 'Break'),
      ],
      onTap: (index){
          setState(() {
            _currentindex = index;
          });
      },
      ),

    );
  }
}