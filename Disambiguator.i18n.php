<?php
/**
 * Internationalisation file for the Disambiguator extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 */
$messages['en'] = array(
	'disambig-desc' => 'Adds the tag <code><nowiki>__DISAMBIG__</nowiki></code> to mark [[Special:DisambiguationPages|disambiguation pages]]',
	# Special:DisambiguationPages
	'disambiguationpages' => 'Disambiguation pages',
	'disambiguationpages-summary' => "The following is a list of all disambiguation pages on {{SITENAME}}.<br />
A page is treated as a disambiguation page if it contains the tag <code><nowiki>__DISAMBIG__</nowiki></code> (or an equivalent alias).",
	# Special:DisambiguationPageLinks
	'disambiguationpagelinks' => 'Pages linking to disambiguation pages',
	'disambiguationpagelinks-summary'  => "The following pages contain at least one link to a disambiguation page.
They may need to link to a more appropriate page instead.<br />
A page is treated as a disambiguation page if it contains the tag <code><nowiki>__DISAMBIG__</nowiki></code> (or an equivalent alias).",
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'disambig-desc' => '{{desc}}',
	'disambiguationpages' => '{{doc-special|DisambiguationPages}}
The special page shows all disambiguation pages.',
	'disambiguationpages-summary' => 'Header text explaining the purpose of the [[Special:DisambiguationPages]] page. It is not necessary to translate "<nowiki>__DISAMBIG__</nowiki>".

See also:
* {{msg-mw|Disambiguationpagelinks-summary}}',
	'disambiguationpagelinks' => '{{doc-special|DisambiguationPageLinks}}
The special page shows all pages with links needing disambiguation.',
	'disambiguationpagelinks-summary' => 'Header text explaining the purpose of the [[Special:DisambiguationPageLinks]] page. It is not necessary to translate "<nowiki>__DISAMBIG__</nowiki>".

See also:
* {{msg-mw|Disambiguationpages-summary}}',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'disambig-desc' => 'Amiesta la etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> pa marcar les [[Special:DisambiguationPages|páxines de dixebra]].',
	'disambiguationpages' => 'Páxines de dixebra',
	'disambiguationpages-summary' => 'La siguiente ye una llista de toles páxines de dixebra de {{SITENAME}}.<br />
Una páxina tratase como páxina de dixebra si contién la etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> (o un alcuñu equivalente).',
	'disambiguationpagelinks' => "Páxines qu'enllacen con páxines de dixebra",
	'disambiguationpagelinks-summary' => 'Les siguientes páxines contienen, polo menos, un enllaz a una páxina de dixebra.
Seique, necesiten enllazar con una páxina más axeitada.<br />
Una páxina tratase como de dixebra si contién la etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> (o un alcuñu equivalente).',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'disambig-desc' => 'Дадае тэг <code><nowiki>__DISAMBIG__</nowiki></code>, каб пазначыць [[Special:DisambiguationPages|старонкі-неадназначнасьці]]',
	'disambiguationpages' => 'Старонкі-неадназначнасьці',
	'disambiguationpages-summary' => 'Ніжэй пададзены сьпіс усіх старонак-неадназначнасьцяў у {{GRAMMAR:месны|{{SITENAME}}}}.<br />
Старонка лічыцца неадназначнай, калі яна ўтрымлівае тэг <code><nowiki>__DISAMBIG__</nowiki></code> (або адпаведны сынонім).',
	'disambiguationpagelinks' => 'Старонкі, якія спасылаюцца на старонкі-неадназначнасьці',
	'disambiguationpagelinks-summary' => 'Наступныя старонкі ўтрымліваюць прынамсі адну спасылку на старонку-неадназначнасьць.
Магчыма, патрабуецца ўдакладненьне спасылак.<br />
Старонка лічыцца неадназначнай, калі яна ўтрымлівае тэг <code><nowiki>__DISAMBIG__</nowiki></code> (або адпаведны сынонім).',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'disambig-desc' => 'Ouzhpennañ ar balizenn <code><nowiki>__DISAMBIG__</nowiki></code> evit merkañ [[Special:DisambiguationPages|ar pajennoù disheñvelout]].',
	'disambiguationpages' => 'Pajennoù disheñvelout',
	'disambiguationpagelinks' => 'Pajennoù enno liammoù war-zu pajennoù disheñvelout',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'disambig-desc' => 'Přidává značku <code><nowiki>__DISAMBIG__</nowiki></code> k označení [[Special:DisambiguationPages|rozcestníků]].',
	'disambiguationpages' => 'Rozcestníky',
	'disambiguationpages-summary' => 'Toto je seznam všech rozcestníků na {{grammar:6sg|{{SITENAME}}}}.<br />Stránka je považována za rozcestník, pokud obsahuje značku <code><nowiki>__DISAMBIG__</nowiki></code> (nebo její synonymum).',
	'disambiguationpagelinks' => 'Stránky odkazující na rozcestníky',
	'disambiguationpagelinks-summary' => 'Následující stránky obsahují nejméně jeden odkaz na rozcestník. Možná by měly obsahovat na konkrétnější stránku.<br />Stránka je považována za rozcestník, pokud obsahuje značku <code><nowiki>__DISAMBIG__</nowiki></code> (nebo její synonymum).',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'disambig-desc' => 'Ergänzt das Tag <code><nowiki>__DISAMBIG__</nowiki></code> zum Markieren von [[Special:DisambiguationPages|Begriffsklärungsseiten]].',
	'disambiguationpages' => 'Begriffsklärungsseiten',
	'disambiguationpages-summary' => 'Es folgt eine Liste aller Begriffsklärungsseiten auf {{SITENAME}}.<br />
Eine Seite wird als Begriffsklärungsseite behandelt, wenn sie das Tag <code><nowiki>__DISAMBIG__</nowiki></code> oder einen entsprechenden Alias enthält.',
	'disambiguationpagelinks' => 'Seiten, die auf Begriffsklärungsseiten verlinken',
	'disambiguationpagelinks-summary' => 'Die folgenden Seiten enthalten mindestens einen Link auf eine Begriffsklärungsseite.
Sie sollten stattdessen auf eine passendere Seite verlinken.<br />
Eine Seite wird als Begriffsklärungsseite behandelt, wenn sie das Tag <code><nowiki>__DISAMBIG__</nowiki></code> oder einen entsprechenden Alias enthält.',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'disambig-desc' => 'Añade la etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> para marcar las [[Special:DisambiguationPages|páginas de desambiguación]]',
	'disambiguationpages' => 'Páginas de desambiguación',
	'disambiguationpagelinks' => 'Páginas que enlazan a páginas de desambiguación',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'disambig-desc' => 'Lisab [[Special:DisambiguationPages|täpsustuslehekülgede]] märgistamiseks sildi <code><nowiki>__DISAMBIG__</nowiki></code>.',
	'disambiguationpages' => 'Täpsustusleheküljed',
	'disambiguationpages-summary' => 'See on {{GRAMMAR:genitive|{{SITENAME}}}} täpsustuslehekülgede loend.<br />
Lehekülg arvatakse täpsustusleheküljeks, kui see sisaldab märgist <code><nowiki>__DISAMBIG__</nowiki></code> või vastavat rööpkuju.',
	'disambiguationpagelinks' => 'Täpsustuslehekülgedele linkivad leheküljed',
	'disambiguationpagelinks-summary' => 'Järgmised leheküljed sisaldavad vähemalt üht linki, mis viitab täpsustusleheküljele.
Võimalik, et nad peaks viitama sobivamale lehekülje.<br />
Lehekülg arvatakse täpsustusleheküljeks, kui see sisaldab märgist <code><nowiki>__DISAMBIG__</nowiki></code> või vastavat rööpkuju.',
);

/** Persian (فارسی)
 * @author Reza1615
 */
$messages['fa'] = array(
	'disambig-desc' => 'افزودن برچسب <code><nowiki>__DISAMBIG__</nowiki></code> برای مشخص کردن [[Special:DisambiguationPages|صفحات ابهام‌زدائی]]',
	'disambiguationpages' => 'صفحه‌های ابهام‌زدایی',
	'disambiguationpages-summary' => 'در زیر فهرستی از همه صفحات ابهام‌زدایی {{SITENAME}} موجود است.<br />
اگر صفحه حاوی برچسب <code><nowiki>__DISAMBIG__</nowiki></code> (یا نام مستعار معادل) باشد به عنوان صفحهٔ ابهام‌زدایی در نظر گرفته می‌شود.',
	'disambiguationpagelinks' => 'صفحه‌های دارای پیوند به صفحه‌های ابهام‌زدایی',
	'disambiguationpagelinks-summary' => 'صفحه های زیر شامل حداقل یک لینک به یک صفحه ابهام زدایی است.
بهتر است آنها به پیوندهای دقیق‌تری پیوند داشته باشند.<br />
اگر صفحه حاوی برچسب <code><nowiki>__DISAMBIG__</nowiki></code> (یا نام مستعار معادل) باشد به عنوان صفحهٔ ابهام‌زدایی در نظر گرفته می‌شود.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'disambig-desc' => 'Ajoute la balise <code><nowiki>__DISAMBIG__</nowiki></code> pour marquer [[Special:DisambiguationPages|les pages d’ambiguïté]].',
	'disambiguationpages' => 'Pages d’ambiguïté',
	'disambiguationpages-summary' => 'Ce qui suit est une liste de toutes les pages d’ambiguïté de {{SITENAME}}.<br />Une page est traitée comme page d’ambiguïté si la page contient la balise <code><nowiki>__DISAMBIG__</nowiki></code> (ou un alias équivalent).',
	'disambiguationpagelinks' => 'Pages menant vers des pages d’ambiguïté',
	'disambiguationpagelinks-summary' => 'Les pages suivantes contiennent au moins un lien vers une page d’ambiguïté. Elles peuvent devoir plutôt être liées à une page plus appropriée.<br />Une page est traitée comme page d’ambiguïté si la page contient la balise <code><nowiki>__DISAMBIG__</nowiki></code> (ou un alias équivalent).',
);

/** Northern Frisian (Nordfriisk)
 * @author Murma174
 */
$messages['frr'] = array(
	'disambig-desc' => "Saat det ''tag'' <code><nowiki>__DISAMBIG__</nowiki></code> iin, am [[Special:DisambiguationPages|muardüüdag artiikler]] tu kääntiaknin.",
	'disambiguationpages' => 'Muardüüdag artiikler',
	'disambiguationpages-summary' => "Diar stun aal a ''muardüüdag artiikler'' faan {{SITENAME}}.<br />
En sidj woort üs ''muardüüdag artiikel'' unsen, wan diar di ''tag'' <code><nowiki>__DISAMBIG__</nowiki></code> (of en likwäärdagen ''alias'') uun brükt woort.",
	'disambiguationpagelinks' => 'Sidjen, diar üüb muardüüdag artiikler ferwise',
	'disambiguationpagelinks-summary' => "Jodiar sidjen ferwise üüb tumanst ään ''muardüüdagen artiikel''. Jo skul beeder direkt üüb en paasin sidj ferwise.<br />
En sidj woort üs ''muardüüdag artiikel'' uunsen, wan diar det ''tag'' <code><nowiki>__DISAMBIG__</nowiki></code> (of en likwäärdagen ''alias'') uun föörkomt.",
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'disambig-desc' => 'Engade a etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> para marcar as [[Special:DisambiguationPages|páxinas de homónimos]].',
	'disambiguationpages' => 'Páxinas de homónimos',
	'disambiguationpages-summary' => 'A seguinte é unha lista de todas as páxinas de homónimos de {{SITENAME}}.<br />
Unha páxina considérase de homónimos se contén a etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> (ou un pseudónimo equivalente).',
	'disambiguationpagelinks' => 'Páxinas que ligan con páxinas de homónimos',
	'disambiguationpagelinks-summary' => 'As seguintes páxina conteñen, polo menos, unha ligazón a unha páxina de homónimos.
Se cadra, deberían ligar cunha páxina máis axeitada.<br />
Unha páxina considérase de homónimos se contén a etiqueta <code><nowiki>__DISAMBIG__</nowiki></code> (ou un pseudónimo equivalente).',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'disambig-desc' => 'Agnayon ti etiketa ti <code><nowiki>__DISAMBIG__</nowiki></code> tapno mamarkaan dagiti [[Special:DisambiguationPages|panangilawlawag a pampanid]]',
	'disambiguationpages' => 'Panangilawlawag a pampanid',
	'disambiguationpages-summary' => 'Ti sumaganad a listaan ket ilistana amin a panangilawlawag a pampanid iti {{SITENAME}}.<br />
Ti panid ket matrato a kas panangilawlawag a panid no aglaon ti etiketa ti <code><nowiki>__DISAMBIG__</nowiki></code> (wenno maysa a kapadpada a parbo a nagan).',
	'disambiguationpagelinks' => 'Dagiti panid a nakasilpo kadagiti panangilawlawag a panid',
	'disambiguationpagelinks-summary' => 'Dagiti sumaganad a panid ketaglaon ti ti saan a basbassit ngem maysa a silpo iti panangilawlawag a panid.
Mabalin a dagitoy ket embes nasken a maisilpo ti nasaysayaat a panid.<br />
Ti panid ket matrato a kas panangilawlawag a panid no aglaon ti etiketa ti <code><nowiki>__DISAMBIG__</nowiki></code> (wenno maysa a kapadpada a parbo a nagan).',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'disambig-desc' => 'Aggiunge il tag <code><nowiki>__DISAMBIG__</nowiki></code> per marcare le [[Special:DisambiguationPages|pagine di disambiguazione]].',
	'disambiguationpages' => 'Pagine di disambiguazione',
	'disambiguationpages-summary' => 'Di seguito è riportato un elenco di tutte le pagine di disambiguazione su {{SITENAME}}.<br />
Una pagina è considerata come una pagina di disambiguazione se la pagina contiene il tag <code><nowiki>__DISAMBIG__</nowiki></code> (o un alias equivalente).',
	'disambiguationpagelinks' => 'Pagine che si collegano a pagine di disambiguazione',
	'disambiguationpagelinks-summary' => 'Le pagine riportate di seguito contengono almeno un collegamento a una pagina di disambiguazione.
Potresti modificare il collegamento affinché punti ad una pagina più appropriata.<br />
Una pagina è considerata come una pagina di disambiguazione se la pagina contiene il tag <code><nowiki>__DISAMBIG__</nowiki></code> (o un alias equivalente).',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'disambig-desc' => '[[Special:DisambiguationPages|曖昧さ回避ページ]]の印として使用する <code><nowiki>__DISAMBIG__</nowiki></code> タグを追加する',
	'disambiguationpages' => '曖昧さ回避ページ',
	'disambiguationpages-summary' => '{{SITENAME}}上の曖昧さ回避ページを以下に列挙します。<br />
タグ <code><nowiki>__DISAMBIG__</nowiki></code> (または同等の別名) を含むページを、曖昧さ回避ページと見なしています。',
	'disambiguationpagelinks' => '曖昧さ回避ページにリンクしているページ',
	'disambiguationpagelinks-summary' => '以下のページには、曖昧さ回避ページへのリンクが 1 つ以上あります。
これらのページでは、より適切なページにリンクする必要がある可能性があります。<br />
タグ <code><nowiki>__DISAMBIG__</nowiki></code> (または同等の別名) を含むページを、曖昧さ回避ページと見なしています。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'disambiguationpages' => 'მრავალმნიშვნელოვანი გვერდები',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'disambig-desc' => '[[Special:DisambiguationPages|동음이의 문서]]로 취급하도록 하는 <code><nowiki>__DISAMBIG__</nowiki></code> 태그를 추가합니다',
	'disambiguationpages' => '동음이의 문서',
	'disambiguationpages-summary' => '다음은 {{SITENAME}}에서 동음이의 문서의 목록입니다.<br />
<code><nowiki>__DISAMBIG__</nowiki></code> 태그(혹은 다른 이름의 태그)가 포함된 문서는 동음이의 문서로 취급됩니다.',
	'disambiguationpagelinks' => '동음이의 문서를 가리키는 문서',
	'disambiguationpagelinks-summary' => '다음 문서는 동음이의 문서를 가리키는 링크가 적어도 하나가 있는 문서입니다. 보다 적절한 문서로 다시 링크를 할 필요가 있습니다.<br />
<code><nowiki>__DISAMBIG__</nowiki></code> 태그(혹은 다른 이름의 태그)가 포함된 문서는 동음이의 문서로 취급됩니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'disambig-desc' => 'Brängk dä Befähl <code><nowiki>__DISAMBIG__</nowiki></code> en et Wiki, öm [[Special:DisambiguationPages|„Watt eß dat?“ Sigge]] ze beschtemme.',
	'disambiguationpages' => '„Watt eß dat?“ Sigge',
	'disambiguationpages-summary' => 'Heh küdd en Leß met alle „Watt eß dat?“ Sigge {{GRAMMAR:em Dativ|{{ucfirst:{{SITENAME}}}}}}, dat sin Sigge, woh <code><nowiki>__DISAMBIG__</nowiki></code> dren schteiht, udder jät zom sällve Efäk.',
	'disambiguationpagelinks' => 'Sigge, di op „Watt eß dat?“ Sigge verlengke donn',
	'disambiguationpagelinks-summary' => 'Di Sigge en heh dä Leß han alle winneschsdens eine Lenk ob_en „Watt eß dat?“ Sigg.
Et künnt sin, dat se bäßer ob_en Sigg lenke dähte, di mieh zopaß kütt.

En Sigg med_enem <code><nowiki>__DISAMBIG__</nowiki></code> Befähl dren, udder jät, wad_et sellve bedügg udder enföösch, zällt als en  „Watt eß dat?“ Sigg.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'disambig-desc' => 'Setzt den Tag <code><nowiki>__DISAMBIG__</nowiki></code> derbäi fir [[Special:DisambiguationPages|Homonynie-Säiten]] ze markéieren',
	'disambiguationpages' => 'Homonymie-Säiten',
	'disambiguationpages-summary' => "Hei ass d'Lëscht vun allen Homonymiesäiten op {{SITENAME}}.<br />
Eng Säit gëtt als Homonymiesäit betruecht wann op der Säit den Tag<code><nowiki>__DISAMBIG__</nowiki></code> (oder en equivalenten Alias) drop steet.",
	'disambiguationpagelinks' => 'Säiten déi op Homonymie-Säite linken',
	'disambiguationpagelinks-summary' => 'Op dëse Säiten ass mindestens ee Link op eng Homonymie Säit.
Déi sollten op eng Säit déi besser passt verlinkt ginn.<br />
Eng Säit gëtt als Homonynie-Säit behandelt wann den Tag <code><nowiki>__DISAMBIG__</nowiki></code> (oder en equivalenten Alias) dran ass.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'disambig-desc' => 'Ја става ознаката <code><nowiki>__DISAMBIG__</nowiki></code> со која ги означува [[Special:DisambiguationPages|појаснителните страници]].',
	'disambiguationpages' => 'Појаснителни страници',
	'disambiguationpages-summary' => 'Ова е список на појаснителни страници на {{SITENAME}}.<br />
Една страница се смета за појаснителна ако ја содржи ознаката <code><nowiki>__DISAMBIG__</nowiki></code> (или нејзин алијас).',
	'disambiguationpagelinks' => 'Страници што водат до појаснителни страници',
	'disambiguationpagelinks-summary' => 'Следниве страници содржат барем по една врска до појаснителна страница.
Веројатно ќе треба да ставите врска до посоодветна (поконкретна) страница.<br />
Една страница се смета за појаснителна доколку ја содржи ознаката <code><nowiki>__DISAMBIG__</nowiki></code> (или нејзин алијас).',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'disambig-desc' => ' [[Special:DisambiguationPages|വിവക്ഷിതങ്ങൾ താളുകൾ]]  അടയാളപ്പെടുത്തുന്നതിനായി താളുകളിൽ <code><nowiki>__DISAMBIG__</nowiki></code> എന്ന് ചേർക്കുന്നു',
	'disambiguationpages' => 'വിവക്ഷിത താളുകൾ',
	'disambiguationpages-summary' => 'താഴെ {{SITENAME}} സംരംഭത്തിലെ വിവക്ഷിതങ്ങൾ താളുകളുടെ പട്ടിക കൊടുത്തിരിക്കുന്നു.<br /> ഒരു താൾ വിവക്ഷിതങ്ങൾ താളായി കണക്കാക്കണമെങ്കിൽ ആ താളിൽ <code><nowiki>__DISAMBIG__</nowiki></code> എന്ന ടാഗ് (അല്ലെങ്കിൽ സമാനമായവ) ഉണ്ടായിരിക്കണം.',
	'disambiguationpagelinks' => 'വിവക്ഷിത താളുകളിലേയ്ക്ക് കണ്ണിചേർത്തിരിക്കുന്ന താളുകൾ',
	'disambiguationpagelinks-summary' => 'താഴെക്കൊടുത്തിരിക്കുന്ന താളുകളിൽ നിന്ന് വിവക്ഷിതങ്ങൾ താളിലേയ്ക്ക് ഒരു കണ്ണിയെങ്കിലുമുണ്ട്. അവ കൂടുതൽ അനുയോജ്യമായ താളിലേയ്ക്ക് മാറ്റേണ്ടതാവശ്യമായിരിക്കാം.<br /> ഒരുതാൾ വിവക്ഷിതങ്ങൾ താളായി കണക്കാക്കണമെങ്കിൽ ആ താളിൽ <code><nowiki>__DISAMBIG__</nowiki></code> എന്ന ടാഗ് (അല്ലെങ്കിൽ സമാനമായവ) ഉണ്ടായിരിക്കണം.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'disambig-desc' => 'Membubuh teg <code><nowiki>__DISAMBIG__</nowiki></code> untuk menandakan [[Special:DisambiguationPages|halaman nyahkekaburan]]',
	'disambiguationpages' => 'Halaman nyahkekaburan',
	'disambiguationpages-summary' => 'Yang berikut merupakan senarai semua halaman nyahkekaburan di {{SITENAME}}.<br />Sesebuah halaman yang mengandungi teg <code><nowiki>__DISAMBIG__</nowiki></code> (atau alias yang seumpamanya) dianggap sebagai halaman nyahkekaburan.',
	'disambiguationpagelinks' => 'Halaman yang berpautan dengan halaman nyahkekaburan',
	'disambiguationpagelinks-summary' => 'Halaman-halaman yang berikut mengandungi sekurang-kurangnya satu pautan ke halaman nyahkekaburan, tetapi seharusnya berpautan dengan halaman yang lebih sesuai.<br />Sesebuah halaman yang mengandungi teg <code><nowiki>__DISAMBIG__</nowiki></code> (atau alias yang seumpamanya) dianggap sebagai halaman nyahkekaburan.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'disambig-desc' => "Voegt de tag <code><nowiki>__DISAMBIG__</nowiki></code> toe om [[Special:DisambiguationPages|doorverwijspagina's]] te markeren",
	'disambiguationpages' => "Doorverwijspagina's",
	'disambiguationpages-summary' => "Hier volgt een lijst met alle doorverwijspagina's op de site {{SITENAME}}.<br />
Een pagina wordt gezien als doorverwijspagina als deze de tag <code><nowiki>__DISAMBIG__</nowiki></code> bevat (of een equivalent alias).",
	'disambiguationpagelinks' => "Pagina's die een koppeling hebben naar doorverwijspagina's",
	'disambiguationpagelinks-summary' => "De volgende pagina's bevatten tenminste één koppeling naar een doorverwijspagina.
Wellicht moeten ze koppelen naar een meer passende pagina.<br />
Een pagina wordt gezien als doorverwijspagina als deze de tag <code><nowiki>__DISAMBIG__</nowiki></code> bevat (of een equivalent alias).",
);

/** Polish (polski)
 * @author Chrumps
 * @author WTM
 */
$messages['pl'] = array(
	'disambig-desc' => 'Dodaje wyrażenie <code><nowiki>__DISAMBIG__</nowiki></code> w celu oznaczenia[[Special:DisambiguationPages|stron ujednoznaczniających]]',
	'disambiguationpages' => 'Strony ujednoznaczniające',
	'disambiguationpages-summary' => 'Poniżej znajduje się lista wszystkich stron ujednoznaczniających na {{grammar:6sg|{{SITENAME}}}}.<br />Strona jest uważana za ujednoznaczniającą gdy zawiera wyrażenie <code><nowiki>__DISAMBIG__</nowiki></code> (bądź równoważny alias).',
	'disambiguationpagelinks' => 'Stron linkujące do stron ujednoznaczniających',
	'disambiguationpagelinks-summary' => 'Poniższe strony zawierają co najmniej jeden link prowadzący do jakiejś strony ujednoznaczniającej.
Najprawdopodobniej powinny linkować do bardziej konkretnej strony docelowej.<br />
Strona jest uważana za ujednoznaczniającą gdy zawiera wyrażenie <code><nowiki>__DISAMBIG__</nowiki></code> (bądź równoważny alias).',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'disambig-desc' => 'Adaugă eticheta <code><nowiki>__DISAMBIG__</nowiki></code> pentru a marca [[Special:DisambiguationPages|paginile de dezambiguizare]]',
	'disambiguationpages' => 'Pagini de dezambiguizare',
	'disambiguationpages-summary' => 'Următoarea este o listă a tuturor paginilor de dezambiguizare de la {{SITENAME}}.<br />
O pagină este socotită drept pagină de dezambiguizare dacă conține eticheta <code><nowiki>__DISAMBIG__</nowiki></code> (sau un alias echivalent).',
	'disambiguationpagelinks' => 'Pagini care trimit către pagini de dezambiguizare',
	'disambiguationpagelinks-summary' => 'Următoarele pagini conțin cel puțin o legătură către o pagină de dezambiguizare.
Ar putea fi necesar ca, în schimb, acestea să conțină legături către pagini mai potrivite.<br />
O pagină este socotită drept pagină de dezambiguizare dacă conține eticheta <code><nowiki>__DISAMBIG__</nowiki></code> (sau un alias echivalent).',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'disambig-desc' => "Aggiugne 'u tag <code><nowiki>__DISAMBIG__</nowiki></code> pe signà le [[Special:DisambiguationPages|pàggende de disambbiguazione]].",
	'disambiguationpages' => 'Pàggene de disambbiguazione',
	'disambiguationpages-summary' => "'u seguende jè 'n'elenghe de tutte le pàggene de disambbiguazione de {{SITENAME}}.<br />
'Na pàgene jè trattate cumme 'na pàgene de disambbiguazione ce 'a pàgene tène 'u tag <code><nowiki>__DISAMBIG__</nowiki></code> (o une equivalende).",
	'disambiguationpagelinks' => 'Pàggene collegate a le pàggene de disambbiguazione',
	'disambiguationpagelinks-summary' => "Le pàggene seguende tènene almene 'na pàgene de disambbiguazione.
Lore ponne avè abbesogne de collegarse a cchiù pàggene appropriate.<br />
'Na pàgene jè trattate cumme a 'na pàgene de disambbiguazione ce 'a pàgene tène 'u tag <code><nowiki>__DISAMBIG__</nowiki></code> (o 'nu nome equivalende).",
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Милан Јелисавчић
 */
$messages['sr-ec'] = array(
	'disambig-desc' => 'Додаје ознаку <code><nowiki>__DISAMBIG__</nowiki></code> за обележавање [[Special:DisambiguationPages|вишезначних одредница]]',
	'disambiguationpages' => 'Вишезначне одреднице',
	'disambiguationpagelinks' => 'Странице до вишезначних одредница',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Jopparn
 */
$messages['sv'] = array(
	'disambig-desc' => 'Lägger till taggen <code><nowiki>__DISAMBIG__</nowiki></code> för att markera [[Special:DisambiguationPages|förgreningssidor]]',
	'disambiguationpages' => 'Förgreningssidor',
	'disambiguationpages-summary' => 'Följande är en lista på alla förgreningssidor på {{SITENAME}}. <br />
En sida behandlas som en förgreningssida om sidan innehåller syntaxen <code><nowiki>__DISAMBIG__</nowiki></code> (eller ett motsvarande alias).',
	'disambiguationpagelinks' => 'Sidor som länkar till förgreningssidor',
	'disambiguationpagelinks-summary' => 'Följande sidor innehåller minst en länk till förgreningssida.
De kan behöva länkas till en lämpligare sida istället.<br>
En sida behandlas som en förgreningssida om sidan innehåller syntaxen <code><nowiki>__DISAMBIG__</nowiki></code> (eller ett motsvarande alias).', # Fuzzy
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'disambiguationpages' => 'అయోమయ నివృత్తి పేజీలు',
	'disambiguationpagelinks' => 'అయోమయ నివృత్తి పుటలకు లంకెలున్న పుటలు',
);

/** Ukrainian (українська)
 * @author Base
 * @author DixonD
 * @author Ата
 */
$messages['uk'] = array(
	'disambig-desc' => 'Додає магічне слово <code><nowiki>__DISAMBIG__</nowiki></code> для позначення [[Special:DisambiguationPages|сторінок тлумачення неоднозначності]]',
	'disambiguationpages' => 'Сторінки тлумачення неоднозначності',
	'disambiguationpages-summary' => 'Далі наводиться список всіх сторінок тлумачення неоднозначності у {{grammar:locative|{{SITENAME}}}}.<br />
Сторінка вважається сторінкою тлумачення неоднозначності, якщо вона містить магічне слово <code><nowiki>__DISAMBIG__</nowiki></code> (або його відповідний псевдонім).',
	'disambiguationpagelinks' => 'Сторінки, що посилаються на сторінки тлумачення неоднозначності',
	'disambiguationpagelinks-summary' => 'Далі наводиться список сторінок, що містять щонайменше одне посилання на сторінку тлумачення неоднозначності.
Ці сторінки можуть потребувати натомість посилання на сторінку, що підходить більше.<br />
Сторінка вважається сторінкою тлумачення неоднозначності, якщо вона містить магічне слово <code><nowiki>__DISAMBIG__</nowiki></code> (або його відповідний псевдонім).',
);

/** Urdu (اردو)
 * @author Noor2020
 */
$messages['ur'] = array(
	'disambig-desc' => 'ٹیگ کا اضافہ کرتا ہے <code><nowiki>__واضح رہے__</nowiki></code> [[Special:DisambiguationPages|صفحات کو واضح]] کے نشان زد کرنا',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'disambig-desc' => 'Thêm từ khóa <code><nowiki>__DISAMBIG__</nowiki></code> để đánh dấu các [[Special:DisambiguationPages|trang định hướng]]',
	'disambiguationpages' => 'Trang định hướng',
	'disambiguationpages-summary' => 'Đây là danh sách các trang định hướng trên {{SITENAME}}.<br />
Các trang định hướng có từ khóa <code><nowiki>__DISAMBIG__</nowiki></code> (hoặc một từ khóa tương tự).',
	'disambiguationpagelinks' => 'Trang liên kết đến trang định hướng',
	'disambiguationpagelinks-summary' => 'Các trang bên dưới chứa ít nhất một liên kết đến một trang định hướng.
Chúng có thể cần liên kết đến một trang dứt khoát hơn.<br />
Các trang định hướng có từ khóa <code><nowiki>__DISAMBIG__</nowiki></code> (hoặc một từ khóa tương tự).',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Cwek
 * @author Shizhao
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'disambig-desc' => '将添加标记<code><nowiki>__DISAMBIG__</nowiki></code>用以标识[[Special:DisambiguationPages|消歧义页]]',
	'disambiguationpages' => '消歧义页',
	'disambiguationpages-summary' => '下面列出了{{SITENAME}}上所有的消歧义页。<br />
如果一个页面包含标记<code><nowiki>__DISAMBIG__</nowiki></code>（或等效的别名），则被视为一个消歧义页。',
	'disambiguationpagelinks' => '链接到消歧义页的页面',
	'disambiguationpagelinks-summary' => '下列页面包含至少一个到消歧义页的链接。
这些链接可能需要修改，以便链接到更恰当的页面。<br />
如果一个页面包含标记<code><nowiki>__DISAMBIG__</nowiki></code>（或等效的别名），则被视为一个消歧义页。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'disambig-desc' => '加入<code><nowiki>__DISAMBIG__</nowiki></code>標記以標示[[Special:DisambiguationPages|消歧義頁]]',
	'disambiguationpages' => '消歧義頁',
	'disambiguationpages-summary' => '以下是{{SITENAME}}上所以消歧義頁的列表。

若頁面含有<code><nowiki>__DISAMBIG__</nowiki></code>或相同標記則視為消歧義頁。',
	'disambiguationpagelinks' => '鏈接到消歧義頁的頁面',
	'disambiguationpagelinks-summary' => '下列頁面含有最下一個連往消歧義頁的連結，他們或應連至更準確的頁面。

若頁面含有<code><nowiki>__DISAMBIG__</nowiki></code>或相同標記則視為消歧義頁。',
);
