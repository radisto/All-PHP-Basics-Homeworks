<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <style>
        form {
            border: 1px solid black;
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    Enter HTML tags:<br/><br/>
    <input type="text" name="text">
    <input type="submit" name="submit" value="Submit"><br/>
    <?php
        $htmlTags = array('html', 'head', 'body', 'div', 'span', 'title', 'link', 'meta', 'style', 'p',
            'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'strong', 'em', 'abbr', 'acronym', 'address', 'bdo',
            'blockquote', 'cite', 'q', 'code', 'ins', 'del', 'dfn', 'kbd', 'pre', 'samp', 'var', 'br',
            'a', 'base', 'img', 'area', 'map', 'object', 'param', 'ul', 'ol', 'li', 'dl', 'dt', 'dd',
            'table', 'tr', 'td', 'th', 'tbody', 'thead', 'tfoot', 'col', 'colgroup', 'caption', 'form',
            'input', 'textarea', 'select', 'option', 'optgroup', 'button', 'label', 'fieldset', 'legend',
            'script', 'noscript', 'b', 'i', 'tt', 'sub', 'sup', 'big', 'small', 'hr'. 'abbr', 'acronym',
            'address', 'base', 'bdo', 'big', 'body', 'br', 'button', 'caption', 'cite', 'code', 'col',
            'colgroup', 'dd', 'del', 'dfn', 'div', 'head', 'hr', 'ins', 'kbd', 'label', 'legend', 'li',
            'map', 'meta', 'noscript', 'object', 'ol', 'optgroup', 'option', 'p', 'param', 'pre', 'q',
            'samp', 'select', 'small', 'span', 'strong', 'style', 'table', 'tbody', 'td', 'tfoot', 'th',
            'thead', 'title', 'tr', 'tt', 'ul');
        if (isset($_POST['submit'])) {
            if (in_array($_POST['text'], $htmlTags)) {
                echo '<b>Valid HTML tag!</b><br/>';
            }
            else {
                echo '<b>Invalid HTML tag!</b><br/>';
            }
        }
        //Every time I press submit, the page reloads and the counter gets deleted.
        //I tried to make the counter with Javascript but it's just not working properly :(
    ?>
</form>
</body>
</html>