<html>
<head>
<title>Результат тестирования</title>
<!-- CSS Styles -->
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/tests.css" rel="stylesheet">
</head>
<body>
<section>
	<header>
	<div class="logo">
		<a href="./index.htm"><img src="/img/logo.png"></a>
	</div>
		<ul>
			<li><a href="/index.htm">Главная</a></li>
			<li><a href="/tests.htm">Тесты</a></li>
			<li><a href="/reg.htm">Регистрация</a></li>
			<li><a href="/login.htm">Авторизация</a></li>
		</ul>
	</header>
	</section>
	<br>
	<br>
	<div class="test_form_1">
<?php
	//Получаем данные из глобальной переменной $_POST, так как мы передаем данные методом POST
	$value_1 = $_POST['value_1'];
	$value_2 = $_POST['value_2'];
	$value_3 = $_POST['value_3'];
	$value_4 = $_POST['value_4'];
	$value_5 = $_POST['value_5'];
	$value_6 = $_POST['value_6'];
	$value_7 = $_POST['value_7'];
	$value_8 = $_POST['value_8'];
	$value_9 = $_POST['value_9'];
	$value_10 = $_POST['value_10'];
	$value_11 = $_POST['value_11'];
	$value_12 = $_POST['value_12'];
	$value_13 = $_POST['value_13'];
	$value_14 = $_POST['value_14'];
	$value_15 = $_POST['value_15'];
	$value_16 = $_POST['value_16'];
	$value_17 = $_POST['value_17'];
	$value_18 = $_POST['value_18'];
	$value_19 = $_POST['value_19'];
	$value_20 = $_POST['value_20'];
	$value_21 = $_POST['value_21'];
	$value_22 = $_POST['value_22'];
	$value_23 = $_POST['value_23'];
	$value_24 = $_POST['value_24'];
	$value_25 = $_POST['value_25'];
	$value_26 = $_POST['value_26'];
	$value_27 = $_POST['value_27'];
	$value_28 = $_POST['value_28'];
	$value_29 = $_POST['value_29'];
	$value_30 = $_POST['value_30'];
	$value_31 = $_POST['value_31'];
	$value_32 = $_POST['value_32'];
	$value_33 = $_POST['value_33'];
	$value_34 = $_POST['value_34'];
	$value_35 = $_POST['value_35'];
	$value_36 = $_POST['value_36'];
	$value_37 = $_POST['value_37'];
	$value_38 = $_POST['value_38'];
	$value_39 = $_POST['value_39'];
	$value_40 = $_POST['value_40'];
	$value_41 = $_POST['value_41'];
	$value_42 = $_POST['value_42'];
	$value_43 = $_POST['value_43'];
	$value_44 = $_POST['value_44'];
	$value_45 = $_POST['value_45'];
	$value_46 = $_POST['value_46'];
	$value_47 = $_POST['value_47'];
	$value_48 = $_POST['value_48'];
	$value_49 = $_POST['value_49'];
	$value_50 = $_POST['value_50'];
	
	$result = array ("0","0","0","0","0","0","0","0","0","0");
	
	/* проверяем первое направление */
	if ($value_1 == "Да") {
		$result[0] += 1;
	}
	if ($value_11 == "Да") {
		$result[0] += 1;
	}
	if ($value_21 == "Да") {
		$result[0] += 1;
	}
	if ($value_31 == "Да") {
		$result[0] += 1;
	}
	if ($value_41 == "Да") {
		$result[0] += 1;
	}
	/* проверяем второе направление */
	if ($value_2 == "Да") {
		$result[1] += 1;
	}
	if ($value_12 == "Да") {
		$result[1] += 1;
	}
	if ($value_22 == "Да") {
		$result[1] += 1;
	}
	if ($value_32 == "Да") {
		$result[1] += 1;
	}
	if ($value_42 == "Да") {
		$result[1] += 1;
	}
	/* проверяем третье направление */
	if ($value_3 == "Да") {
		$result[2] += 1;
	}
	if ($value_13 == "Да") {
		$result[2] += 1;
	}
	if ($value_23 == "Да") {
		$result[2] += 1;
	}
	if ($value_33 == "Да") {
		$result[2] += 1;
	}
	if ($value_43 == "Да") {
		$result[2] += 1;
	}
	/* проверяем четвертое направление */
	if ($value_4 == "Да") {
		$result[3] += 1;
	}
	if ($value_14 == "Да") {
		$result[3] += 1;
	}
	if ($value_24 == "Да") {
		$result[3] += 1;
	}
	if ($value_34 == "Да") {
		$result[3] += 1;
	}
	if ($value_44 == "Да") {
		$result[3] += 1;
	}
	/* проверяем пятое направление */
	if ($value_5 == "Да") {
		$result[4] += 1;
	}
	if ($value_15 == "Да") {
		$result[4] += 1;
	}
	if ($value_25 == "Да") {
		$result[4] += 1;
	}
	if ($value_35 == "Да") {
		$result[4] += 1;
	}
	if ($value_45 == "Да") {
		$result[4] += 1;
	}
	/* проверяем шестое направление */
	if ($value_6 == "Да") {
		$result[5] += 1;
	}
	if ($value_16 == "Да") {
		$result[5] += 1;
	}
	if ($value_26 == "Да") {
		$result[5] += 1;
	}
	if ($value_36 == "Да") {
		$result[5] += 1;
	}
	if ($value_46 == "Да") {
		$result[5] += 1;
	}
	/* проверяем седьмое направление */
	if ($value_7 == "Да") {
		$result[6] += 1;
	}
	if ($value_17 == "Да") {
		$result[6] += 1;
	}
	if ($value_27 == "Да") {
		$result[6] += 1;
	}
	if ($value_37 == "Да") {
		$result[6] += 1;
	}
	if ($value_47 == "Да") {
		$result[6] += 1;
	}
	/* проверяем восьмое направление */
	if ($value_8 == "Да") {
		$result[7] += 1;
	}
	if ($value_18 == "Да") {
		$result[7] += 1;
	}
	if ($value_28 == "Да") {
		$result[7] += 1;
	}
	if ($value_38 == "Да") {
		$result[7] += 1;
	}
	if ($value_48 == "Да") {
		$result[7] += 1;
	}
	/* проверяем девятое направление */
	if ($value_9 == "Да") {
		$result[8] += 1;
	}
	if ($value_19 == "Да") {
		$result[8] += 1;
	}
	if ($value_29 == "Да") {
		$result[8] += 1;
	}
	if ($value_39 == "Да") {
		$result[8] += 1;
	}
	if ($value_49 == "Да") {
		$result[8] += 1;
	}
	/* проверяем десятое направление */
	if ($value_10 == "Да") {
		$result[9] += 1;
	}
	if ($value_20 == "Да") {
		$result[9] += 1;
	}
	if ($value_30 == "Да") {
		$result[9] += 1;
	}
	if ($value_40 == "Да") {
		$result[9] += 1;
	}
	if ($value_50 == "Да") {
		$result[9] += 1;
	}

	foreach($result as $k => $v)
	{
    if($v > $max)
    {
        $max = $v;
        $max_key = $k;
    }
	}
	
	switch ($max_key)
	{
		case '0':
		echo "<center>Ваше направление <strong> физика и математика </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Северо-Востоный федеральный университет </p> <p> - Российский государственный гидрометеорологический университет </p> <p> - Московский физико-технический институт (национальный исследовательский университет) </p> <p> - Национальный исследовательский университет «Высшая школа экономики» </p>";
		break;
		case '1':
		echo "<center>Ваше направление <strong> химия и биология </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Московский физико-технический институт (национальный исследовательский университет) </p> <p> - Национальный исследовательский университет «Высшая школа экономики»  </p> <p> - Санкт-Петербургский горный университет </p> <p> - Национальный исследовательский ядерный университет «МИФИ» </p>";
		break;
		case '2':
		echo "<center>Ваше направление <strong> радиотехника и электроника </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Московский финансово-юридический университет </p> <p> - Санкт-Петербургский политехнический университет Петра Великого </p> <p> - Санкт-Петербургский государственный университет </p> <p> - МИРЭА – Российский технологический университет </p>";
		break;
		case '3':
		echo "<center>Ваше направление <strong> механика и конструирование </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Московский государственный университет имени М.В. Ломоносова </p> <p> - РСанкт-Петербургский государственный университет </p> <p> - Московский государственный технический университет им. Н.Э. Баумана (национальный исследовательский университет) </p> <p> - Новосибирский национальный исследовательский государственный университет </p>";
		break;
		case '4':
		echo "<center>Ваше направление <strong> география и геология </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Национальный исследовательский технологический университет «МИСиС» </p> <p> - Национальный исследовательский Томский государственный университет </p> <p> - Московский государственный университет имени М.В. Ломоносова </p> <p> - Уфимский государственный нефтяной технический университет </p>";
		break;
		case '5':
		echo "<center>Ваше направление <strong> литература и искусство </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Российский государственный гидрометеорологический университет </p> <p> - Северо-Осетинский государственный университет имени К.Л.Хетагурова </p> <p> - Национальный исследовательский университет «Высшая школа экономики» </p> <p> - Российская академия народного хозяйства и государственной службы при Президенте Российской Федерации </p>";
		break;
		case '6':
		echo "<center>Ваше направление <strong> история и политика </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Северо-Востоный федеральный университет </p> <p> - Российский государственный гидрометеорологический университет </p> <p> - Российский университет дружбы народов </p> <p> - Санкт-Петербургский государственный университет </p>";
		break;
		case '7':
		echo "<center>Ваше направление <strong> педагогика и медицина </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Санкт-Петербургский государственный университет </p> <p> - Институт медицинского образования ФГБУ «НМИЦ им. В.А. Алмазова» Минздрава России </p> <p> - Московский государственный медико-стоматологический университет им. А.И. Евдокимова </p> <p> - Новосибирский национальный исследовательский государственный университет </p>";
		break;
		case '8':
		echo "<center>Ваше направление <strong> предпринимательство и домоводство </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - МИРЭА – Российский технологический университет </p> <p> - Белорусско-Российский университет </p> <p> - Институт отраслевого менеджмента </p> <p> - Санкт-Петербургский политехнический университет Петра Великого </p>";
		break;
		case '9':
		echo "<center>Ваше направление <strong> спорт и военное дело </strong></center> <br/>
		<strong>Рекомендуемые вузы:</strong> <p> - Южно-Уральский государственный университет (национальный исследовательский университет) </p> <p> - Санкт-Петербургский государственный университет </p> <p> - Нижегородский государственный университет им. Н.И. Лобачевского </p> <p> - Южный федеральный университет </p>";
		break;
	}
	
?>
<br>
	<center><input class="button_test_2" type="button" value="Назад" onClick="window.location='/tests.htm'" /></center>
</div>
</body>
</html>