<?php

class FormClass
{
	public function open($action = 'index.php', $method = 'GET')
	{
		return sprintf('<form action="%s" method="%s">', $action, $method);
	}

	public function input($type = 'text', $value = '', $placeholder = '')
	{
		return sprintf('<input type="%s" value="%s" placeholder="%s">', $type, $value, $placeholder);
	}

	public function password($placeholder = '', $value = '')
	{
		return $this->input('password', $value, $placeholder); 
	}

	public function submit($title = '', $type = 'button')
	{
		return sprintf('<button type="%s">%s</button>', $type, $title);
	}

	public function textarea($placeholder = '', $value = '')
	{
		return sprintf('<textarea placeholder="%s">%s</textarea>', $placeholder, $value);
	}

	public function label($for = '', $placeholder = '')
	{
		return sprintf('<label for="%s">%s</label>', $for, $placeholder);
	}

	public function select($type = 'radio', $value = '')
	{
		return sprintf('<input type="%s" value="%s" >', $type, $value);
	}

	public function close()
	{
		return '</form>';
	}
}

// class Labelclass
// {
// 	public function open($action = 'index.php', $method = 'GET')
// 	{
// 		return sprintf('<form action="%s" method="%s">', $action, $method);
// 	}


// 	public function close()
// 	{
// 		return '</form>';
// 	}
// }

$form = new FormClass;
//$form = new Labelclass;

echo $form->open('index.php', 'POST');
// <form action="index.php" method="POST">

echo $form->input('text', '', 'Enter value');
// <input type="text" value="!!!">

echo $form->password('Enter password');
// <input type="password" value="!!!">

echo $form->submit('go');
// <button type="submit">go</button>

echo $form->textarea('Enter text');
// <textarea placeholder="123">!!!</textarea>

echo $form->label('test', '01');

echo $form->select('radio', 'test');

echo $form->close();
// </form>



?>