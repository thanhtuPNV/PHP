<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>My Web Page</h1>

<p>Hello everybody!</p>

<p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
	console.log(new google.translate.TranslateElement({includedLanguages: "vi,en"}, 'google_translate_element'));
	document.querySelector(".goog-te-combo").innerHTML = cform;
	
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<p>You can translate the content of this page by selecting a language in the select box.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium consectetur totam quibusdam commodi ut quisquam et vel quam dicta autem, perspiciatis itaque nobis enim dignissimos deserunt, repellat quod est non.</p>


</body>
</html>