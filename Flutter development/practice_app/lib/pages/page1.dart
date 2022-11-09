
import 'package:flutter/material.dart';
import 'dart:async';

class page1 extends StatefulWidget {
  const page1({Key? key}) : super(key: key);

  @override
  State<page1> createState() => _page1State();
}

class _page1State extends State<page1> {
  final List<String> _todoList = <String>[];
  // text field
  final TextEditingController _textFieldController = TextEditingController();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: ListView(children: _getItems()),
          floatingActionButton: FloatingActionButton(
          onPressed: () => {_displayDialog(context)},
    tooltip: 'Add Item',
    child: Icon(Icons.add)),
      child:



      // add items to the to-do list

    );
  }

  void _addTodoItem(String title) {
    // Wrapping it inside a set state will notify
    // the app that the state has changed
    setState(() {
      _todoList.add(title);
    });
    _textFieldController.clear();
  }

  void _deleteTodoItem(String title) {
    // Wrapping it inside a set state will notify
    // the app that the state has changed
    setState(() {
      _todoList.remove(title);
    });
    // _todoList.remove(title);
    for (int i = 0; i < _todoList.length; i++) {
      print(_todoList[i]);
    }

    // _textFieldController.clear();
    // print(title);
  }

  // this Generate list of item widgets
  Widget _buildTodoItem(String title) {
    return ListTile(
        title: Text(title),
      trailing: IconButton(
        icon: const Icon(Icons.delete),
        onPressed: () => {

          _deleteTodoItem(title),
        },
      ),
    );
  }

  // display a dialog for the user to enter items
  Future<void> _displayDialog(BuildContext context) async {
    // alter the app state to show a dialog
    return showDialog(
        context: context,
        builder: (BuildContext context) {
          return AlertDialog(
            title: const Text('Add a task to your list'),
            content: TextField(
              controller: _textFieldController,
              decoration: const InputDecoration(hintText: 'Enter task here'),
            ),
            actions: <Widget>[
              // add button
              TextButton(
                child: const Text('ADD'),
                onPressed: () {
                  // Navigator.of(context).pop();
                  if(!_textFieldController.text.isEmpty){
                    _addTodoItem(_textFieldController.text);
                  }
                },
              ),
              // Cancel button
              TextButton(
                child: const Text('CANCEL'),
                onPressed: () {
                  Navigator.of(context).pop();
                },
              )
            ],
          );
        }
    );
  }
  // iterates through our todo list title
  List<Widget> _getItems() {
    final List<Widget> _todoWidgets = <Widget>[];
    for (String title in _todoList) {
      _todoWidgets.add(_buildTodoItem(title));
    }
    return _todoWidgets;
  }
}
