<!-- Form -->
<p class="mt-4 fw-bolder display-6">Personal Info</p>
<hr class="major mt-2 mb-4">
<form action="#" method="POST" >
	<div class="row gtr-uniform">
		<div class="col-6">
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" id="first_name" value="" />
		</div>

		<div class="col-6">
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" id="last_name" value="" />
		</div>

		<div class="col-6">
			<label for="mobile_no">Mobile No</label>
			<input type="tel" name="phone" id="phone" value="" />
		</div>

		<div class="col-6">
			<label for="dob">Date Of Birth</label><br>
			<input type="date" name="dob" class="border-1 rounded pe-5 py-2" />
		</div>


		<div class="col-12">
			<label for="email">Email</label>
			<input required type="email" name="email" id="email" value="" />
		</div>


		<!-- Break -->
		<!-- <div class="col-12">
			<select name="demo-category" id="demo-category">
				<option value="">- Category -</option>
				<option value="1">Manufacturing</option>
				<option value="1">Shipping</option>
				<option value="1">Administration</option>
				<option value="1">Human Resources</option>
			</select>
		</div> -->

		<div class="col-12">
			<select name="nationality" id="nationality">
				<option value="" disabled="" selected>Select Nationality</option>
				<option value="AFGHAN"> AFGHAN </option>
				<option value="ALAND ISLAND"> ALAND ISLAND </option>
				<option value="ALBANIAN"> ALBANIAN </option>
				<option value="ALGERIAN"> ALGERIAN </option>
				<option value="AMERICAN"> AMERICAN </option>
				<option value="AMERICAN"> AMERICAN </option>
				<option value="AMERICAN SAMOAN"> AMERICAN SAMOAN </option>
				<option value="ANDORRAN"> ANDORRAN </option>
				<option value="ANGOLAN"> ANGOLAN </option>
				<option value="ANGUILLAN"> ANGUILLAN </option>
				<option value="ANTARCTIC"> ANTARCTIC </option>
				<option value="ANTIGUAN OR BARBUDAN"> ANTIGUAN OR BARBUDAN </option>
				<option value="ARGENTINE"> ARGENTINE </option>
				<option value="ARMENIAN"> ARMENIAN </option>
				<option value="ARUBAN"> ARUBAN </option>
				<option value="AUSTRALIAN"> AUSTRALIAN </option>
				<option value="AUSTRIAN"> AUSTRIAN </option>
				<option value="AZERBAIJANI, AZERI"> AZERBAIJANI, AZERI </option>
				<option value="BAHAMIAN"> BAHAMIAN </option>
				<option value="BAHRAINI"> BAHRAINI </option>
				<option value="BANGLADESHI"> BANGLADESHI </option>
				<option value="BARBADIAN"> BARBADIAN </option>
				<option value="BARTHÉLEMOIS"> BARTHÉLEMOIS </option>
				<option value="BASOTHO"> BASOTHO </option>
				<option value="BELARUSIAN"> BELARUSIAN </option>
				<option value="BELGIAN"> BELGIAN </option>
				<option value="BELIZEAN"> BELIZEAN </option>
				<option value="BENINESE, BENINOIS"> BENINESE, BENINOIS </option>
				<option value="BERMUDIAN, BERMUDAN"> BERMUDIAN, BERMUDAN </option>
				<option value="BHUTANESE"> BHUTANESE </option>
				<option value="BIOT"> BIOT </option>
				<option value="BISSAU-GUINEAN"> BISSAU-GUINEAN </option>
				<option value="BOLIVIAN"> BOLIVIAN </option>
				<option value="BOSNIAN OR HERZEGOVINIAN"> BOSNIAN OR HERZEGOVINIAN </option>
				<option value="BOUVET ISLAND"> BOUVET ISLAND </option>
				<option value="BRAZILIAN"> BRAZILIAN </option>
				<option value="BRITISH"> BRITISH </option>
				<option value="BRITISH VIRGIN ISLAND"> BRITISH VIRGIN ISLAND </option>
				<option value="BRUNEIAN"> BRUNEIAN </option>
				<option value="BULGARIAN"> BULGARIAN </option>
				<option value="BURKINABÉ"> BURKINABÉ </option>
				<option value="BURMESE"> BURMESE </option>
				<option value="BURUNDIAN"> BURUNDIAN </option>
				<option value="CAMBODIAN"> CAMBODIAN </option>
				<option value="CAMEROONIAN"> CAMEROONIAN </option>
				<option value="CANADIAN"> CANADIAN </option>
				<option value="CAPE VERDEANS"> CAPE VERDEANS </option>
				<option value="CAYMANIAN"> CAYMANIAN </option>
				<option value="CENTRAL AFRICAN"> CENTRAL AFRICAN </option>
				<option value="CHADIAN"> CHADIAN </option>
				<option value="CHANNEL ISLAND"> CHANNEL ISLAND </option>
				<option value="CHANNEL ISLAND"> CHANNEL ISLAND </option>
				<option value="CHILEAN"> CHILEAN </option>
				<option value="CHINESE"> CHINESE </option>
				<option value="2CHINESE, TAIWANESE15"> CHINESE, TAIWANESE </option>
				<option value="CHRISTMAS ISLAND"> CHRISTMAS ISLAND </option>
				<option value="COCOS ISLAND"> COCOS ISLAND </option>
				<option value="COLOMBIAN"> COLOMBIAN </option>
				<option value="COMORAN, COMORIAN"> COMORAN, COMORIAN </option>
				<option value="COOK ISLAND"> COOK ISLAND </option>
				<option value="COSTA RICAN"> COSTA RICAN </option>
				<option value="CROATIAN"> CROATIAN </option>
				<option value="CUBAN"> CUBAN </option>
				<option value="CYPRIOT"> CYPRIOT </option>
				<option value="CZECH"> CZECH </option>
				<option value="DANISH"> DANISH </option>
				<option value="DJIBOUTIAN"> DJIBOUTIAN </option>
				<option value="DOMINICAN"> DOMINICAN </option>
				<option value="DOMINICAN"> DOMINICAN </option>
				<option value="DUTCH"> DUTCH </option>
				<option value="DUTCH ANTILLEANS"> DUTCH ANTILLEANS </option>
				<option value="ECUADORIAN"> ECUADORIAN </option>
				<option value="EGYPTIAN"> EGYPTIAN </option>
				<option value="EMIRATI, EMIRIAN, EMIRI"> EMIRATI, EMIRIAN, EMIRI </option>
				<option value="EQUATORIAL GUINEAN, EQUATOGUINEAN"> EQUATORIAL GUINEAN, EQUATOGUINEAN </option>
				<option value="ERITREAN"> ERITREAN </option>
				<option value="ESTONIAN"> ESTONIAN </option>
				<option value="ETHIOPIAN"> ETHIOPIAN </option>
				<option value="FALKLAND ISLAND"> FALKLAND ISLAND </option>
				<option value="FAROESE"> FAROESE </option>
				<option value="FIJIAN"> FIJIAN </option>
				<option value="FINNISH"> FINNISH </option>
				<option value="FRENCH"> FRENCH </option>
				<option value="FRENCH GUIANESE"> FRENCH GUIANESE </option>
				<option value="FRENCH POLYNESIAN"> FRENCH POLYNESIAN </option>
				<option value="FRENCH SOUTHERN TERRITORIES"> FRENCH SOUTHERN TERRITORIES </option>
				<option value="GABONESE"> GABONESE </option>
				<option value="GAMBIAN"> GAMBIAN </option>
				<option value="GEORGIAN"> GEORGIAN </option>
				<option value="GERMAN"> GERMAN </option>
				<option value="GHANAIAN"> GHANAIAN </option>
				<option value="GIBRALTAR"> GIBRALTAR </option>
				<option value="GREEK, HELLENIC"> GREEK, HELLENIC </option>
				<option value="GREENLANDIC"> GREENLANDIC </option>
				<option value="GRENADIAN"> GRENADIAN </option>
				<option value="GUADELOUPE"> GUADELOUPE </option>
				<option value="GUAMANIAN, GUAMBAT"> GUAMANIAN, GUAMBAT </option>
				<option value="GUATEMALAN"> GUATEMALAN </option>
				<option value="GUINEAN"> GUINEAN </option>
				<option value="GUYANESE"> GUYANESE </option>
				<option value="HAITIAN"> HAITIAN </option>
				<option value="HEARD ISLAND OR MCDONALD ISLANDS"> HEARD ISLAND OR MCDONALD ISLANDS </option>
				<option value="HONDURAN"> HONDURAN </option>
				<option value="HONG KONG, HONG KONGESE"> HONG KONG, HONG KONGESE </option>
				<option value="HUNGARIAN, MAGYAR"> HUNGARIAN, MAGYAR </option>
				<option value="I-KIRIBATI"> I-KIRIBATI </option>
				<option value="ICELANDIC"> ICELANDIC </option>
				<option value="INDIAN"> INDIAN </option>
				<option value="INDONESIAN"> INDONESIAN </option>
				<option value="IRANIAN, PERSIAN"> IRANIAN, PERSIAN </option>
				<option value="IRAQI"> IRAQI </option>
				<option value="IRISH"> IRISH </option>
				<option value="ISRAELI"> ISRAELI </option>
				<option value="ITALIAN"> ITALIAN </option>
				<option value="IVORIAN"> IVORIAN </option>
				<option value="JAMAICAN"> JAMAICAN </option>
				<option value="JAPANESE"> JAPANESE </option>
				<option value="JORDANIAN"> JORDANIAN </option>
				<option value="KAZAKHSTANI, KAZAKH"> KAZAKHSTANI, KAZAKH </option>
				<option value="KENYAN"> KENYAN </option>
				<option value="KITTITIAN OR NEVISIAN"> KITTITIAN OR NEVISIAN </option>
				<option value="KUWAITI"> KUWAITI </option>
				<option value="KYRGYZSTANI, KYRGYZ, KIRGIZ, KIRGHIZ"> KYRGYZSTANI, KYRGYZ, KIRGIZ, KIRGHIZ </option>
				<option value="LAO, LAOTIAN"> LAO, LAOTIAN </option>
				<option value="LATVIAN"> LATVIAN </option>
				<option value="LEBANESE"> LEBANESE </option>
				<option value="LIBERIAN"> LIBERIAN </option>
				<option value="LIECHTENSTEIN"> LIECHTENSTEIN </option>
				<option value="LITHUANIAN"> LITHUANIAN </option>
				<option value="LUXEMBOURG, LUXEMBOURGISH"> LUXEMBOURG, LUXEMBOURGISH </option>
				<option value="MACANESE, CHINESE"> MACANESE, CHINESE </option>
				<option value="MACEDONIAN"> MACEDONIAN </option>
				<option value="MAHORAN"> MAHORAN </option>
				<option value="MALAGASY"> MALAGASY </option>
				<option value="MALAWIAN"> MALAWIAN </option>
				<option value="MALAYSIAN"> MALAYSIAN </option>
				<option value="MALDIVIAN"> MALDIVIAN </option>
				<option value="MALIAN, MALINESE"> MALIAN, MALINESE </option>
				<option value="MALTESE"> MALTESE </option>
				<option value="MANX"> MANX </option>
				<option value="MARSHALLESE"> MARSHALLESE </option>
				<option value="MARTINIQUAIS, MARTINICAN"> MARTINIQUAIS, MARTINICAN </option>
				<option value="MAURITANIAN"> MAURITANIAN </option>
				<option value="1MAURITIAN41"> MAURITIAN </option>
				<option value="MEXICAN"> MEXICAN </option>
				<option value="MICRONESIAN"> MICRONESIAN </option>
				<option value="MOLDOVAN"> MOLDOVAN </option>
				<option value="MONÉGASQUE, MONACAN"> MONÉGASQUE, MONACAN </option>
				<option value="MONGOLIAN"> MONGOLIAN </option>
				<option value="MONTENEGRIN"> MONTENEGRIN </option>
				<option value="MONTSERRATIAN"> MONTSERRATIAN </option>
				<option value="MOROCCAN"> MOROCCAN </option>
				<option value="MOTSWANA, BOTSWANAN"> MOTSWANA, BOTSWANAN </option>
				<option value="MOZAMBICAN"> MOZAMBICAN </option>
				<option value="NAMIBIAN"> NAMIBIAN </option>
				<option value="NAURUAN"> NAURUAN </option>
				<option value="NEPALI, NEPALESE"> NEPALI, NEPALESE </option>
				<option value="NEW CALEDONIAN"> NEW CALEDONIAN </option>
				<option value="NEW ZEALAND, NZ"> NEW ZEALAND, NZ </option>
				<option value="NI-VANUATU, VANUATUAN"> NI-VANUATU, VANUATUAN </option>
				<option value="NICARAGUAN"> NICARAGUAN </option>
				<option value="NIGERIAN"> NIGERIAN </option>
				<option value="161"> NIGERIEN </option>
				<option value="NIGERIEN"> NIUEAN </option>
				<option value="NORFOLK ISLAND"> NORFOLK ISLAND </option>
				<option value="NORTH KOREAN"> NORTH KOREAN </option>
				<option value="NORTHERN MARIANAN"> NORTHERN MARIANAN </option>
				<option value="NORWEGIAN"> NORWEGIAN </option>
				<option value="OMANI"> OMANI </option>
				<option value="PAKISTANI"> PAKISTANI </option>
				<option value="PALAUAN"> PALAUAN </option>
				<option value="PANAMANIAN"> PANAMANIAN </option>
				<option value="PAPUA NEW GUINEAN, PAPUAN"> PAPUA NEW GUINEAN, PAPUAN </option>
				<option value="PARAGUAYAN"> PARAGUAYAN </option>
				<option value="PERUVIAN"> PERUVIAN </option>
				<option value="PHILIPPINE, FILIPINO"> PHILIPPINE, FILIPINO </option>
				<option value="PITCAIRN ISLAND"> PITCAIRN ISLAND </option>
				<option value="POLISH"> POLISH </option>
				<option value="PORTUGUESE"> PORTUGUESE </option>
				<option value="PUERTO RICAN"> PUERTO RICAN </option>
				<option value="QATARI"> QATARI </option>
				<option value="RÉUNIONESE, RÉUNIONNAIS"> RÉUNIONESE, RÉUNIONNAIS </option>
				<option value="ROMANIAN"> ROMANIAN </option>
				<option value="RUSSIAN"> RUSSIAN </option>
				<option value="RWANDAN"> RWANDAN </option>
				<option value="SAHRAWI, SAHRAWIAN, SAHRAOUIAN"> SAHRAWI, SAHRAWIAN, SAHRAOUIAN </option>
				<option value="SAINT HELENIAN"> SAINT HELENIAN </option>
				<option value="SAINT LUCIAN"> SAINT LUCIAN </option>
				<option value="SAINT VINCENTIAN, VINCENTIAN"> SAINT VINCENTIAN, VINCENTIAN </option>
				<option value="SAINT-MARTINOISE"> SAINT-MARTINOISE </option>
				<option value="SAINT-PIERRAIS OR MIQUELONNAIS"> SAINT-PIERRAIS OR MIQUELONNAIS </option>
				<option value="SALVADORAN"> SALVADORAN </option>
				<option value="SAMMARINESE"> SAMMARINESE </option>
				<option value="SAMOAN"> SAMOAN </option>
				<option value="SÃO TOMÉAN"> SÃO TOMÉAN </option>
				<option value="SAUDI, SAUDI ARABIAN"> SAUDI, SAUDI ARABIAN </option>
				<option value="SENEGALESE"> SENEGALESE </option>
				<option value="SERBIAN"> SERBIAN </option>
				<option value="SEYCHELLOIS"> SEYCHELLOIS </option>
				<option value="SIERRA LEONEAN"> SIERRA LEONEAN </option>
				<option value="SINGAPOREAN"> SINGAPOREAN </option>
				<option value="SLOVAK"> SLOVAK </option>
				<option value="SLOVENIAN, SLOVENE"> SLOVENIAN, SLOVENE </option>
				<option value="SOLOMON ISLAND"> SOLOMON ISLAND </option>
				<option value="SOMALI, SOMALIAN"> SOMALI, SOMALIAN </option>
				<option value="SOUTH AFRICAN"> SOUTH AFRICAN </option>
				<option value="SOUTH GEORGIA OR SOUTH SANDWICH ISLANDS"> SOUTH GEORGIA OR SOUTH SANDWICH ISLANDS
				</option>
				<option value="SOUTH KOREAN"> SOUTH KOREAN </option>
				<option value="SPANISH"> SPANISH </option>
				<option value="SRI LANKAN"> SRI LANKAN </option>
				<option value="SUDANESE"> SUDANESE </option>
				<option value="SURINAMESE"> SURINAMESE </option>
				<option value="SVALBARD"> SVALBARD </option>
				<option value="SWAZI"> SWAZI </option>
				<option value="SWEDISH"> SWEDISH </option>
				<option value="SWISS"> SWISS </option>
				<option value="SYRIAN"> SYRIAN </option>
				<option value="TAJIKISTANI"> TAJIKISTANI </option>
				<option value="TANZANIAN"> TANZANIAN </option>
				<option value="THAI"> THAI </option>
				<option value="TIMORESE"> TIMORESE </option>
				<option value="TOGOLESE"> TOGOLESE </option>
				<option value="TOKELAUAN"> TOKELAUAN </option>
				<option value="TONGAN"> TONGAN </option>
				<option value="TRINIDADIAN OR TOBAGONIAN"> TRINIDADIAN OR TOBAGONIAN </option>
				<option value="TUNISIAN"> TUNISIAN </option>
				<option value="TURKISH"> TURKISH </option>
				<option value="TURKMEN"> TURKMEN </option>
				<option value="TURKS AND CAICOS ISLAND"> TURKS AND CAICOS ISLAND </option>
				<option value="TUVALUAN"> TUVALUAN </option>
				<option value="U.S. VIRGIN ISLAND"> U.S. VIRGIN ISLAND </option>
				<option value="UGANDAN"> UGANDAN </option>
				<option value="UKRAINIAN"> UKRAINIAN </option>
				<option value="URUGUAYAN"> URUGUAYAN </option>
				<option value="UZBEKISTANI, UZBEK"> UZBEKISTANI, UZBEK </option>
				<option value="VATICAN"> VATICAN </option>
				<option value="VATICAN"> VATICAN </option>
				<option value="VATICAN"> VATICAN </option>
				<option value="VIETNAMESE"> VIETNAMESE </option>
				<option value="WALLIS AND FUTUNA, WALLISIAN OR FUTUNAN"> WALLIS AND FUTUNA, WALLISIAN OR FUTUNAN
				</option>
				<option value="YEMENI"> YEMENI </option>
				<option value="ZAMBIAN"> ZAMBIAN </option>
				<option value="ZIMBABWEAN"> ZIMBABWEAN </option><!---->
			</select>
		</div>

		<div class="col-6">
			<select name="country" id="country">
				<option disabled="" value="null" selected>Select Country</option>
				<option value="NIGERIA"> NIGERIA</option>
				<option value="ANTARCTICA"> ANTARCTICA</option>
				<option value="HUNGARY"> HUNGARY</option>
				<option value="ICELAND"> ICELAND</option>
				<option value="INDIA"> INDIA</option>
				<option value="INDONESIA"> INDONESIA</option>
				<option value="IRAN"> IRAN</option>
				<option value="IRAQ"> IRAQ</option>
				<option value="IRELAND"> IRELAND</option>
				<option value="ISLE OF MAN"> ISLE OF MAN</option>
				<option value="ISRAEL"> ISRAEL</option>
				<option value="ITALY"> ITALY</option>
				<option value="ANTIGUA AND BARBUDA"> ANTIGUA AND BARBUDA</option>
				<option value="JAMAICA"> JAMAICA</option>
				<option value="JAPAN"> JAPAN</option>
				<option value="JERSEY"> JERSEY</option>
				<option value="JORDAN"> JORDAN</option>
				<option value="KAZAKHSTAN"> KAZAKHSTAN</option>
				<option value="KENYA"> KENYA</option>
				<option value="KIRIBATI"> KIRIBATI</option>
				<option value=" DEMOCRATIC PEOPLE'S REPUBLIC OFKOREA"> DEMOCRATIC PEOPLE'S REPUBLIC OFKOREA</option>
				<option value="REPUBLIC OF KOREA"> REPUBLIC OF KOREA</option>
				<option value="KUWAIT"> KUWAIT</option>
				<option value="ARGENTINA"> ARGENTINA</option>
				<option value="KYRGYZSTAN"> KYRGYZSTAN</option>
				<option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC"> LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
				<option value="LATVIA"> LATVIA</option>
				<option value="LEBANON"> LEBANON</option>
				<option value="LESOTHO"> LESOTHO</option>
				<option value="LIBERIA"> LIBERIA</option>
				<option value="LIBYAN ARAB JAMAHIRIYA"> LIBYAN ARAB JAMAHIRIYA</option>
				<option value="LIECHTENSTEIN"> LIECHTENSTEIN</option>
				<option value="LITHUANIA"> LITHUANIA</option>
				<option value="LUXEMBOURG"> LUXEMBOURG</option>
				<option value="ARMENIA"> ARMENIA</option>
				<option value="MACAO"> MACAO</option>
				<option value="THE FORMER YUGOSLAV REPUBLIC OF MACEDONIA"> THE FORMER YUGOSLAV REPUBLIC OF MACEDONIA</option>
				<option value="MADAGASCAR"> MADAGASCAR</option>
				<option value="MALAWI"> MALAWI</option>
				<option value="MALAYSIA"> MALAYSIA</option>
				<option value="MALDIVES"> MALDIVES</option>
				<option value="MALI"> MALI</option>
				<option value="MALTA"> MALTA</option>
				<option value="MARSHALL ISLANDS"> MARSHALL ISLANDS</option>
				<option value="MARTINIQUE"> MARTINIQUE</option>
				<option value="ARUBA"> ARUBA</option>
				<option value="MAURITANIA"> MAURITANIA</option>
				<option value="141"> MAURITIUS</option>
				<option value="142"> MAYOTTE</option>
				<option value="143"> MEXICO</option>
				<option value="144"> MICRONESIA, FEDERATED STATES OF</option>
				<option value="145"> MOLDOVA, REPUBLIC OF</option>
				<option value="146"> MONACO</option>
				<option value="147"> MONGOLIA</option>
				<option value="148"> MONTENEGRO</option>
				<option value="149"> MONTSERRAT</option>
				<option value="15"> AUSTRALIA</option>
				<option value="150"> MOROCCO</option>
				<option value="151"> MOZAMBIQUE</option>
				<option value="152"> MYANMAR</option>
				<option value="153"> NAMIBIA</option>
				<option value="154"> NAURU</option>
				<option value="155"> NEPAL</option>
				<option value="156"> NETHERLANDS</option>
				<option value="157"> NETHERLANDS ANTILLES</option>
				<option value="158"> NEW CALEDONIA</option>
				<option value="159"> NEW ZEALAND</option>
				<option value="16"> AUSTRIA</option>
				<option value="160"> NICARAGUA</option>
				<option value="161"> NIGER</option>
				<option value="162"> NIUE</option>
				<option value="163"> NORFOLK ISLAND</option>
				<option value="164"> NORTHERN MARIANA ISLANDS</option>
				<option value="165"> NORWAY</option>
				<option value="166"> OMAN</option>
				<option value="167"> PAKISTAN</option>
				<option value="168"> PALAU</option>
				<option value="169"> PALESTINIAN TERRITORY, OCCUPIED</option>
				<option value="17"> AZERBAIJAN</option>
				<option value="170"> PANAMA</option>
				<option value="171"> PAPUA NEW GUINEA</option>
				<option value="172"> PARAGUAY</option>
				<option value="173"> PERU</option>
				<option value="174"> PHILIPPINES</option>
				<option value="175"> PITCAIRN</option>
				<option value="176"> POLAND</option>
				<option value="177"> PORTUGAL</option>
				<option value="178"> PUERTO RICO</option>
				<option value="179"> QATAR</option>
				<option value="18"> BAHAMAS</option>
				<option value="180"> RÉUNION</option>
				<option value="181"> ROMANIA</option>
				<option value="182"> RUSSIAN FEDERATION</option>
				<option value="183"> RWANDA</option>
				<option value="184"> SAINT BARTHÉLEMY</option>
				<option value="185"> SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA</option>
				<option value="186"> SAINT KITTS AND NEVIS</option>
				<option value="187"> SAINT LUCIA</option>
				<option value="188"> SAINT MARTIN</option>
				<option value="189"> SAINT PIERRE AND MIQUELON</option>
				<option value="19"> BAHRAIN</option>
				<option value="190"> SAINT VINCENT AND THE GRENADINES</option>
				<option value="191"> SAMOA</option>
				<option value="192"> SAN MARINO</option>
				<option value="193"> SAO TOME AND PRINCIPE</option>
				<option value="194"> SAUDI ARABIA</option>
				<option value="195"> SENEGAL</option>
				<option value="196"> SERBIA</option>
				<option value="197"> SEYCHELLES</option>
				<option value="198"> SIERRA LEONE</option>
				<option value="199"> SINGAPORE</option>
				<option value="2"> AFGHANISTAN</option>
				<option value="20"> BANGLADESH</option>
				<option value="200"> SLOVAKIA</option>
				<option value="201"> SLOVENIA</option>
				<option value="202"> SOLOMON ISLANDS</option>
				<option value="203"> SOMALIA</option>
				<option value="204"> SOUTH AFRICA</option>
				<option value="205"> SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
				<option value="206"> SPAIN</option>
				<option value="207"> SRI LANKA</option>
				<option value="208"> SUDAN</option>
				<option value="209"> SURINAME</option>
				<option value="21"> BARBADOS</option>
				<option value="210"> SVALBARD AND JAN MAYEN</option>
				<option value="211"> SWAZILAND</option>
				<option value="212"> SWEDEN</option>
				<option value="213"> SWITZERLAND</option>
				<option value="214"> SYRIAN ARAB REPUBLIC</option>
				<option value="215"> TAIWAN, PROVINCE OF CHINA</option>
				<option value="216"> TAJIKISTAN</option>
				<option value="217"> TANZANIA, UNITED REPUBLIC OF</option>
				<option value="218"> THAILAND</option>
				<option value="219"> TIMOR-LESTE</option>
				<option value="22"> BELARUS</option>
				<option value="220"> TOGO</option>
				<option value="221"> TOKELAU</option>
				<option value="222"> TONGA</option>
				<option value="223"> TRINIDAD AND TOBAGO</option>
				<option value="224"> TUNISIA</option>
				<option value="225"> TURKEY</option>
				<option value="226"> TURKMENISTAN</option>
				<option value="227"> TURKS AND CAICOS ISLANDS</option>
				<option value="228"> TUVALU</option>
				<option value="229"> UGANDA</option>
				<option value="23"> BELGIUM</option>
				<option value="230"> UKRAINE</option>
				<option value="231"> UNITED ARAB EMIRATES</option>
				<option value="232"> UNITED KINGDOM</option>
				<option value="233"> UNITED STATES</option>
				<option value="234"> UNITED STATES MINOR OUTLYING ISLANDS</option>
				<option value="235"> URUGUAY</option>
				<option value="236"> UZBEKISTAN</option>
				<option value="237"> VANUATU</option>
				<option value="238"> VATICAN CITY STATE</option>
				<option value="239"> VENEZUELA, BOLIVARIAN REPUBLIC OF</option>
				<option value="24"> BELIZE</option>
				<option value="240"> VIET NAM</option>
				<option value="241"> VIRGIN ISLANDS, BRITISH</option>
				<option value="242"> VIRGIN ISLANDS, U.S.</option>
				<option value="243"> WALLIS AND FUTUNA</option>
				<option value="244"> WESTERN SAHARA</option>
				<option value="245"> YEMEN</option>
				<option value="246"> ZAMBIA</option>
				<option value="247"> ZIMBABWE</option>
				<option value="25"> BENIN</option>
				<option value="26"> BERMUDA</option>
				<option value="27"> BHUTAN</option>
				<option value="28"> BOLIVIA</option>
				<option value="29"> BOSNIA AND HERZEGOVINA</option>
				<option value="3"> ÅLAND ISLANDS</option>
				<option value="30"> BOTSWANA</option>
				<option value="31"> BOUVET ISLAND</option>
				<option value="32"> BRAZIL</option>
				<option value="33"> BRITISH INDIAN OCEAN TERRITORY</option>
				<option value="34"> BRUNEI DARUSSALAM</option>
				<option value="35"> BULGARIA</option>
				<option value="36"> BURKINA FASO</option>
				<option value="37"> BURUNDI</option>
				<option value="38"> CAMBODIA</option>
				<option value="39"> CAMEROON</option>
				<option value="4"> ALBANIA</option>
				<option value="40"> CANADA</option>
				<option value="41"> CAPE VERDE</option>
				<option value="42"> CAYMAN ISLANDS</option>
				<option value="43"> CENTRAL AFRICAN REPUBLIC</option>
				<option value="44"> CHAD</option>
				<option value="45"> CHILE</option>
				<option value="46"> CHINA</option>
				<option value="47"> CHRISTMAS ISLAND</option>
				<option value="48"> COCOS (KEELING) ISLANDS</option>
				<option value="49"> COLOMBIA</option>
				<option value="5"> ALGERIA</option>
				<option value="50"> COMOROS</option>
				<option value="51"> CONGO</option>
				<option value="52"> CONGO</option>
				<option value="53"> COOK ISLANDS</option>
				<option value="54"> COSTA RICA</option>
				<option value="55"> CÔTE D'IVOIRE</option>
				<option value="56"> CROATIA</option>
				<option value="57"> CUBA</option>
				<option value="58"> CYPRUS</option>
				<option value="59"> CZECH REPUBLIC</option>
				<option value="6"> AMERICAN SAMOA</option>
				<option value="60"> DENMARK</option>
				<option value="61"> DJIBOUTI</option>
				<option value="62"> DOMINICA</option>
				<option value="63"> DOMINICAN REPUBLIC</option>
				<option value="64"> ECUADOR</option>
				<option value="65"> EGYPT</option>
				<option value="66"> EL SALVADOR</option>
				<option value="67"> EQUATORIAL GUINEA</option>
				<option value="68"> ERITREA</option>
				<option value="69"> ESTONIA</option>
				<option value="7"> ANDORRA</option>
				<option value="70"> ETHIOPIA</option>
				<option value="71"> FALKLAND ISLANDS (MALVINAS)</option>
				<option value="72"> FAROE ISLANDS</option>
				<option value="73"> FIJI</option>
				<option value="74"> FINLAND</option>
				<option value="75"> FRANCE</option>
				<option value="76"> FRENCH GUIANA</option>
				<option value="77"> FRENCH POLYNESIA</option>
				<option value="78"> FRENCH SOUTHERN TERRITORIES</option>
				<option value="79"> GABON</option>
				<option value="8"> ANGOLA</option>
				<option value="80"> GAMBIA</option>
				<option value="81"> GEORGIA</option>
				<option value="82"> GERMANY</option>
				<option value="83"> GHANA</option>
				<option value="84"> GIBRALTAR</option>
				<option value="85"> GREECE</option>
				<option value="86"> GREENLAND</option>
				<option value="87"> GRENADA</option>
				<option value="88"> GUADELOUPE</option>
				<option value="89"> GUAM</option>
				<option value="9"> ANGUILLA</option>
				<option value="90"> GUATEMALA</option>
				<option value="91"> GUERNSEY</option>
				<option value="92"> GUINEA</option>
				<option value="93"> GUINEA-BISSAU</option>
				<option value="94"> GUYANA</option>
				<option value="95"> HAITI</option>
				<option value="96"> HEARD ISLAND AND MCDONALD ISLANDS</option>
				<option value="97"> HOLY SEE (VATICAN CITY STATE)</option>
				<option value="98"> HONDURAS</option>
				<option value="99"> HONG KONG</option><!---->
			</select>
		</div>


		<div class="col-6">
			<select name="state" id="state">
				<option disabled="" value="null" selected>Select State</option>
				<option value="BAYELSA"> BAYELSA </option>
				<option value="CROSS RIVER"> CROSS RIVER </option>
				<option value="EDO"> EDO </option>
				<option value="EKITI"> EKITI </option>
				<option value="ONDO"> ONDO </option>
				<option value="OSUN"> OSUN </option>
				<option value="LAGOS"> LAGOS </option>
				<option value="OGUN"> OGUN </option>
				<option value="OYO"> OYO </option>
				<option value="BENUE"> BENUE </option>
				<option value="KOGI"> KOGI </option>
				<option value="RIVERS"> RIVERS </option>
				<option value="FCT"> FCT </option>
				<option value="KWARA"> KWARA </option>
				<option value="NIGER"> NIGER </option>
				<option value="NASARAWA"> NASARAWA </option>
				<option value="TARABA"> TARABA </option>
				<option value="PLATEAU"> PLATEAU </option>
				<option value="GOMBE"> GOMBE </option>
				<option value="ADAMAWA"> ADAMAWA </option>
				<option value="KADUNA"> KADUNA </option>
				<option value="BORNO"> BORNO </option>
				<option value="IMO"> IMO </option>
				<option value="BAUCHI"> BAUCHI </option>
				<option value="KANO"> KANO </option>
				<option value="JIGAWA"> JIGAWA </option>
				<option value="YOBE"> YOBE </option>
				<option value="KATSINA"> KATSINA </option>
				<option value="KEBBI"> KEBBI </option>
				<option value="ZAMFARA"> ZAMFARA </option>
				<option value="SOKOTO"> SOKOTO </option>
				<option value="OTHERS"> OTHERS </option>
				<option value="ABIA"> ABIA </option>
				<option value="AKWA"> AKWA IBOM </option>
				<option value="ANAMBRA"> ANAMBRA </option>
				<option value="EBONYI"> EBONYI </option>
				<option value="ENUGU"> ENUGU </option>
				<option value="DELTA"> DELTA </option><!---->
			</select>
		</div>

		<div class="row">
			<label for="Gender">Gender</label>
			<div class="col-4 col-12-small">
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">MALE</label>
			</div>

			<div class="col-4 col-12-small">
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">FEMALE</label>
			</div>
		</div>

		<p class="mt-3 display-6 fw-bolder">Location Info</p>
		<hr class="major mt-2 mb-4">


		<div class="col-6">
			<label for="address">House No</label>
			<input type="text" name="house_no" id="house_no">
		</div>

		<div class="col-6">
			<label for="address">Street Name</label>
			<input type="text" name="street_name" id="street_name">
		</div>

		<div class="col-6">
			<label for="address">City</label>
			<input type="text" name="city" id="city">
		</div>

		<div class="col-6">
			<label for="address">Town</label>
			<input type="text" name="town" id="town">
		</div>

		<div class="col-12">
			<label for="address">Nearest Landmark</label>
			<input type="text" name="nearest_landmark" id="nearest_landmark">
		</div>


		<!-- Break -->

		<p class="mt-3 display-6 fw-bolder">University Info</p>
		<hr class="major mt-1 mb-1">

		<div class="col-12">
			<label for="mat_no">Matriculation Number</label>
			<input type="text" name="mat_no" id="mat_no">
		</div>


		<div class="col-12">
			<select name="level" id="level">
				<option value="" selected>Select level of study</option>
				<option value="100lvl">100lv</option>
				<option value="200lvl">200lv</option>
				<option value="300lvl">300lv</option>
				<option value="400lvl">400lv</option>
				<option value="500lvl">500lv</option>
				<option value="600lvl">600lv</option>
				<option value="700lvl">700lv</option>
			</select>
		</div>

		<div class="col-6">
			<select name="faculty" id="faculty">
				<option value="" selected>Select Faculty</option>
				<option value="Agriculture">Faculty of Agriculture</option>
				<option value="Arts">Faculty of Arts</option>
				<option value="Basic Medical Sciences">Faculty of Basic Medical Sciences</option>
				<option value="Computing">Faculty of Computing</option>
				<option value="DEMO">Faculty of DEMO</option>
				<option value="Education">Faculty of Education</option>
				<option value="Environmental Sciences">Faculty of Environmental Sciences</option>
				<option value="Engineering and Technologies">Faculty of Engineering and Technologies</option>
				<option value="Law">Faculty of Law</option>
				<option value="Medicine">Faculty of Medicine</option>
				<option value="Management Sciences">Faculty of Management Sciences</option>
				<option value="Sciences">Faculty of Sciences</option>
				<option value="Social Sciences">Faculty of Social Sciences</option>
				<option value="General Studies Unit">Faculty of General Studies Unit</option>
			</select>
		</div>

		<div class="col-6">
			<input type="text" name="department" id="department">
		</div>


		<!-- Break -->
		<div class="row">
			<div class="col-6">
				<input type="checkbox" id="checkedk" name="verify_email">
				<label for="demo-copy">Use Email for verification </label>
			</div>
			<div class="col-6 col-12-small">
				<input type="checkbox" id="checked" name="verify_email" checked>
				<label for="checked">Complete verification at the physical library</label>
			</div>
		</div>

		<!-- Break -->
		<p class="mt-3 display-6 fw-bolder">Bank Info</p>
		<hr class="major mt-1 mb-1">
		<div class="row">
			<div class="col-6">
				<select name="bank_name" id="bank">
					<option value="" selected disabled="">Select Bank</option>
					<option value="Accion Microfinance Bank">Accion Microfinance Bank </option>
					<option value="Advans La Fayette Microfinance Bank">Advans La Fayette Microfinance Bank </option>
					<option value="Citibank Nigeria Limited">Citibank Nigeria Limited </option>
					<option value="Coronation Merchant Bank">Coronation Merchant Bank </option>
					<option value="Covenant Microfinance Bank Ltd">Covenant Microfinance Bank Ltd </option>
					<option value="Dot Microfinance Bank">Dot Microfinance Bank </option>
					<option value="Ecobank Nigeria">Ecobank Nigeria </option>
					<option value="Empire Trust Microfinance Bank">Empire Trust Microfinance Bank </option>
					<option value="FairMoney Microfinance Bank">FairMoney Microfinance Bank </option>
					<option value="FBNQuest Merchant Bank">FBNQuest Merchant Bank </option>
					<option value="Fidelity Bank Plc">Fidelity Bank Plc </option>
					<option value="Finca Microfinance Bank Limited">Finca Microfinance Bank Limited </option>
					<option value="First Bank of Nigeria Limited">First Bank of Nigeria Limited </option>
					<option value="First City Monument Bank Limited">First City Monument Bank Limited </option>
					<option value="FSDH Merchant Bank">FSDH Merchant Bank </option>
					<option value="Globus Bank Limited">Globus Bank Limited </option>
					<option value="Guaranty Trust Holding Company Plc">Guaranty Trust Holding Company Plc </option>
					<option value="Infinity Microfinance Bank">Infinity Microfinance Bank </option>
					<option value="Jaiz Bank Plc">Jaiz Bank Plc </option>
					<option value="Keystone Bank Limited">Keystone Bank Limited </option>
					<option value="Kuda Bank">Kuda Bank </option>
					<option value="Lotus Bank">Lotus Bank </option>
					<option value="Mint Finex MFB">Mint Finex MFB </option>
					<option value="Mkobo MFB">Mkobo MFB </option>
					<option value="Moneyfield Microfinance Bank">Moneyfield Microfinance Bank </option>
					<option value="Moniepoint Microfinance Bank">Moniepoint Microfinance Bank </option>
					<option value="Mutual Trust Microfinance Bank">Mutual Trust Microfinance Bank </option>
					<option value="Nova Merchant Bank">Nova Merchant Bank </option>
					<option value="Opay">Opay </option>
					<option value="Optimus Bank Limited">Optimus Bank Limited </option>
					<option value="Palmpay">Palmpay </option>
					<option value="Parallex Bank Limited">Parallex Bank Limited </option>
					<option value="Peace Microfinance Bank">Peace Microfinance Bank </option>
					<option value="Polaris Bank Limited">Polaris Bank Limited </option>
					<option value="PremiumTrust Bank Limited">PremiumTrust Bank Limited </option>
					<option value="Providus Bank Limited">Providus Bank Limited </option>
					<option value="Raven Bank">Raven Bank </option>
					<option value="Rephidim Microfinance Bank">Rephidim Microfinance Bank </option>
					<option value="Rex Microfinance Bank">Rex Microfinance Bank </option>
					<option value="Rubies Bank">Rubies Bank </option>
					<option value="Signature Bank Limited">Signature Bank Limited </option>
					<option value="Sparkle Bank">Sparkle Bank </option>
					<option value="Stanbic IBTC Bank Plc">Stanbic IBTC Bank Plc </option>
					<option value="Stanbic IBTC NIB">Stanbic IBTC NIB </option>
					<option value="Standard Chartered">Standard Chartered </option>
					<option value="Sterling Bank Plc">Sterling Bank Plc </option>
					<option value="SunTrust Bank Nigeria Limited">SunTrust Bank Nigeria Limited </option>
					<option value="SunTrust Bank Nigeria limited NIB">SunTrust Bank Nigeria limited NIB </option>
					<option value="TAJBank Limited">TAJBank Limited </option>
					<option value="Titan Trust Bank Limited">Titan Trust Bank Limited </option>
					<option value="Union Bank of Nigeria Plc">Union Bank of Nigeria Plc </option>
					<option value="United Bank for Africa Plc">United Bank for Africa Plc </option>
					<option value="VFD Microfinance Bank">VFD Microfinance Bank </option>
					<option value="Wema Bank">Wema Bank </option>
					<option value="Zenith Bank Plc">Zenith Bank Plc </option>
				</select>
			</div>

			<div class="col-6">
				<input type="text" name="account_name" id="account_name" placeholder="Enter Account Name ">
			</div>

		</div>

		<div class="col-6">
			<input type="text" name="account_no" id="account_no" placeholder="Enter Account Number">
		</div>

		<p class="mt-3 display-6 fw-bolder">Additional Info</p>
		<hr class="major mt-1 mb-1">

		<div class="col-12">
			<label for="additional_info">Is there any additional information worth noting?</label>
			<textarea name="additional_info" id="additional_info" rows="4">
			</textarea>
		</div>
		<!-- Break -->
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Done" class="primary" /></li>
				<!-- <li><input type="reset" value="Reset" /></li> -->
			</ul>
		</div>

	</div>
</form>
<!-- </form> -->
