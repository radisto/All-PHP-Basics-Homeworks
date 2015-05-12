<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <style>
        #computerClone, #otherClone {
            display: none;
        }
    </style>
</head>
<body>
<div id="computerClone"><input type="text" name="progLang[]"/><select name="progSkill[]"><option value="beg">Beginner</option><option value="pro">Programmer</option><option value="nin">Ninja</option></select><br/></div>
<div id="otherClone">
    <input type="text" name="language[]"/>
    <select name="langCompr[]">
        <option value="default">-Comprehension-</option>
        <option value="beg">Beginner</option>
        <option value="adv">Advanced</option>
        <option value="int">Intermediate</option>
    </select>
    <select name="langRead[]">
        <option value="default">-Reading-</option>
        <option value="beg">Beginner</option>
        <option value="adv">Advanced</option>
        <option value="int">Intermediate</option>
    </select>
    <select name="langWrite[]">
        <option value="default">-Writing-</option>
        <option value="beg">Beginner</option>
        <option value="adv">Advanced</option>
        <option value="int">Intermediate</option>
    </select><br/>
</div>
<form id="form" method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="firstName" placeholder="First Name"/><br/>
        <input type="text" name="lastName" placeholder="Last Name"/><br/>
        <input type="email" name="email" placeholder="Email"/><br/>
        <input type="text" name="phone" placeholder="Phone Number"/><br/>
        <label for="female">Female</label>
        <input type="radio" name="gender" value="female" id="female"/>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="male" id="male"/><br/>
        <label for="bDay">Birth Date</label><br/>
        <input type="date" name="bDay" id="bDay"/><br/>
        <label for="bCountry">Nationality</label><br/>
        <select name="bCountry" id="bCountry">
            <option value="bg">Bulgarian</option>
            <option value="aus">Australian</option>
            <option value="can">Canadian</option>
            <option value="us">American</option>
            <option value="gb">British</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Position</legend>
        <label for="company">Company Name</label>
        <input type="text" name="company" id="company"/><br/>
        <label for="from">From</label>
        <input type="date" name="from" id="from"/><br/>
        <label for="to">To</label>
        <input type="date" name="to" id="to"/>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        Programming Languages<br/>
        <div id="computer"><input type="text" name="progLang[]"/><select name="progSkill[]"><option value="beg">Beginner</option><option value="pro">Programmer</option><option value="nin">Ninja</option></select><br/></div>
        <button onclick="Remove()">Remove Language</button>
        <button onclick="Add()">Add Language</button>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        Languages<br/>
        <div id="other">
            <input type="text" name="language[]"/>
            <select name="langCompr[]">
                <option value="default">-Comprehension-</option>
                <option value="beg">Beginner</option>
                <option value="adv">Advanced</option>
                <option value="int">Intermediate</option>
            </select>
            <select name="langRead[]">
                <option value="default">-Reading-</option>
                <option value="beg">Beginner</option>
                <option value="adv">Advanced</option>
                <option value="int">Intermediate</option>
            </select>
            <select name="langWrite[]">
                <option value="default">-Writing-</option>
                <option value="beg">Beginner</option>
                <option value="adv">Advanced</option>
                <option value="int">Intermediate</option>
            </select><br/>
        </div>
        <button onclick="Remove2()">Remove Language</button>
        <button onclick="Add2()">Add Language</button>
    </fieldset>
    <input type="submit" name="submit" value="Generate CV"/>
</form>
<script>
    function Add() {
        var a = document.getElementById('computerClone').innerHTML;
        var b = document.getElementById('computer').innerHTML;
        document.getElementById('computer').innerHTML = a + b;
    }
    function Remove() {
        var a = document.getElementById('computerClone').innerHTML;
        var b = document.getElementById('computer').innerHTML;
        document.getElementById('computer').innerHTML = b.substring(a.length, b.length);
    }
    function Add2() {
        var c = document.getElementById('otherClone').innerHTML.toString();
        var d = document.getElementById('other').innerHTML.toString();
        document.getElementById('other').innerHTML = (c + d);
    }
    function Remove2() {
        var c = document.getElementById('otherClone').innerHTML.toString();
        var d = document.getElementById('other').innerHTML.toString();
        document.getElementById('other').innerHTML = d.substring(c.length, d.length);
    }
</script>
</body>
</html>