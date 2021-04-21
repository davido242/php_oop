<!DOCTYPE html>
<html>
<head>
  <title>Calc Page</title>
  <style>
    body{
      background: navy;
      color: #fff;
      text-align: center;
    }
    input, button{
      display: block;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <h2>Object Oriented Programming Lessons!<h2/>
    <form action="calculator" method="POST">
      <input type="type" name="num1">
      <input type="type" name="num2">
      <select name="cal">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
      </select>
      <button type="submit">Calculate</button>
    </form>
</body>
</html>