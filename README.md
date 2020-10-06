# CodeIgniter 4 Web Application 

## Simple introduction for question bank system

This web application of bank question consists of login, register, and edit question function.

It have two table of database. The database name is question_bank

  1. user_login = for user login with username and password

  2. forms = table that have subject, type of question and question data
  


## Overview coding structure

This system used two types of model which are:
  1. UserModel = connect with user table to save user information
  2. QuestionModel = connect with table forms to save the question
 
 As for controller
  1. Users = interact with two views which are the login and register view
  2. Questions = interact with three views which are add, edit and index
 *index view will be display after user succesfull login



