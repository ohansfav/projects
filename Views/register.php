<!-- Form -->
<p class="mt-4 fw-bolder display-6">Personal Info</p>
<hr class="major mt-2 mb-4">
<form method="post" action="<?php echo base_url() . 'register' ?>">
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
			<input type="email" name="email" id="email" value="" />
		</div>

		<div class="col-12">
			<select name="nationality" id="demo-category">
				<option value="null" disabled="" selected>Select Nationality</option>
				<option value="AFGHAN">AFGHAN</option>
				<option value="ALAND ISLANDS">ALAND ISLANDS</option>
				<option value="ALBANIAN">ALBANIAN</option>
				<option value="ALGERIAN">ALGERIAN</option>
				<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
				<option value="ANDORRAN">ANDORRAN</option>
				<option value="ANGOLAN">ANGOLAN</option>
				<option value="ANGUILLAN">ANGUILLAN</option>
				<option value="ANTIGUAN, BARBUDAN">ANTIGUAN, BARBUDAN</option>
				<option value="ARGENTINE">ARGENTINE</option>
				<option value="ARMENIAN">ARMENIAN</option>
				<option value="ARUBAN">ARUBAN</option>
				<option value="AUSTRALIAN">AUSTRALIAN</option>
				<option value="AUSTRIAN">AUSTRIAN</option>
				<option value="AZERBAIJANI, AZERI">AZERBAIJANI, AZERI</option>
				<option value="BAHAMIAN">BAHAMIAN</option>
				<option value="BAHRAINI">BAHRAINI</option>
				<option value="BANGLADESHI">BANGLADESHI</option>
				<option value="BARBADIAN">BARBADIAN</option>
				<option value="BELARUSIAN">BELARUSIAN</option>
				<option value="BELGIAN">BELGIAN</option>
				<option value="BELIZEAN">BELIZEAN</option>
				<option value="BENINESE, BENINOIS">BENINESE, BENINOIS</option>
				<option value="BERMUDIAN, BERMUDAN">BERMUDIAN, BERMUDAN</option>
				<option value="BHUTANESE">BHUTANESE</option>
				<option value="BOLIVIAN">BOLIVIAN</option>
				<option value="BOSNIAN, HERZEGOVINIAN">BOSNIAN, HERZEGOVINIAN</option>
				<option value="BOTSWANAN">BOTSWANAN</option>
				<option value="BRAZILIAN">BRAZILIAN</option>
				<option value="BRITISH">BRITISH</option>
				<option value="BRITISH VIRGIN ISLAND">BRITISH VIRGIN ISLAND</option>
				<option value="BRUNEIAN">BRUNEIAN</option>
				<option value="BULGARIAN">BULGARIAN</option>
				<option value="BURKINABÉ">BURKINABÉ</option>
				<option value="BURMESE">BURMESE</option>
				<option value="BURUNDIAN">BURUNDIAN</option>
				<option value="CABO VERDEAN">CABO VERDEAN</option>
				<option value="CAMBODIAN">CAMBODIAN</option>
				<option value="CAMEROONIAN">CAMEROONIAN</option>
				<option value="CANADIAN">CANADIAN</option>
				<option value="CAYMAN ISLAND">CAYMAN ISLAND</option>
				<option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
				<option value="CHADIAN">CHADIAN</option>
				<option value="CHILEAN">CHILEAN</option>
				<option value="CHINESE">CHINESE</option>
				<option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
				<option value="COCOS ISLAND">COCOS ISLAND</option>
				<option value="COLOMBIAN">COLOMBIAN</option>
				<option value="COMORAN">COMORAN</option>
				<option value="CONGOLESE">CONGOLESE</option>
				<option value="COOK ISLAND">COOK ISLAND</option>
				<option value="COSTA RICAN">COSTA RICAN</option>
				<option value="CROATIAN">CROATIAN</option>
				<option value="CUBAN">CUBAN</option>
				<option value="CYPRIOT">CYPRIOT</option>
				<option value="CZECH">CZECH</option>
				<option value="DANISH">DANISH</option>
				<option value="DJIBOUTIAN">DJIBOUTIAN</option>
				<option value="DOMINICAN">DOMINICAN</option>
				<option value="DUTCH">DUTCH</option>
				<option value="EAST TIMORESE">EAST TIMORESE</option>
				<option value="ECUADOREAN">ECUADOREAN</option>
				<option value="EGYPTIAN">EGYPTIAN</option>
				<option value="EMIRATI, EMIRIAN">EMIRATI, EMIRIAN</option>
				<option value="ENGLISH">ENGLISH</option>
				<option value="EQUATORIAL GUINEAN, EQUATOGUINEAN">EQUATORIAL GUINEAN, EQUATOGUINEAN</option>
				<option value="ERITREAN">ERITREAN</option>
				<option value="ESTONIAN">ESTONIAN</option>
				<option value="ESWATINI, SWAZI">ESWATINI, SWAZI</option>
				<option value="ETHIOPIAN">ETHIOPIAN</option>
				<option value="FALKLAND ISLAND">FALKLAND ISLAND</option>
				<option value="FAROESE">FAROESE</option>
				<option value="FIJIAN">FIJIAN</option>
				<option value="FILIPINO">FILIPINO</option>
				<option value="FINNISH">FINNISH</option>
				<option value="FRENCH">FRENCH</option>
				<option value="GABONESE">GABONESE</option>
				<option value="GAMBIAN">GAMBIAN</option>
				<option value="GEORGIAN">GEORGIAN</option>
				<option value="GERMAN">GERMAN</option>
				<option value="GHANAIAN">GHANAIAN</option>
				<option value="GIBRALTAR">GIBRALTAR</option>
				<option value="GREEK">GREEK</option>
				<option value="GREENLANDIC">GREENLANDIC</option>
				<option value="GRENADIAN">GRENADIAN</option>
				<option value="GUADELOUPE">GUADELOUPE</option>
				<option value="GUAMANIAN, GUAMESE">GUAMANIAN, GUAMESE</option>
				<option value="GUATEMALAN">GUATEMALAN</option>
				<option value="GUINEAN">GUINEAN</option>
				<option value="GUINEAN">GUINEAN</option>
				<option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
				<option value="GUYANESE">GUYANESE</option>
				<option value="HAITIAN">HAITIAN</option>
				<option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
				<option value="HONDURAN">HONDURAN</option>
				<option value="HONG KONG">HONG KONG</option>
				<option value="HUNGARIAN">HUNGARIAN</option>
				<option value="ICELANDIC">ICELANDIC</option>
				<option value="INDIAN">INDIAN</option>
				<option value="INDONESIAN">INDONESIAN</option>
				<option value="IRANIAN, PERSIAN">IRANIAN, PERSIAN</option>
				<option value="IRAQI">IRAQI</option>
				<option value="IRISH">IRISH</option>
				<option value="ISRAELI">ISRAELI</option>
				<option value="ITALIAN">ITALIAN</option>
				<option value="IVORIAN, IVOIRIAN">IVORIAN, IVOIRIAN</option>
				<option value="JAMAICAN">JAMAICAN</option>
				<option value="JAPANESE">JAPANESE</option>
				<option value="JERSEY">JERSEY</option>
				<option value="JORDANIAN">JORDANIAN</option>
				<option value="KAZAKHSTANI, KAZAKH">KAZAKHSTANI, KAZAKH</option>
				<option value="KENYAN">KENYAN</option>
				<option value="KOSOVAR">KOSOVAR</option>
				<option value="KUWAITI">KUWAITI</option>
				<option value="KYRGYZ, KYRGYZSTANI">KYRGYZ, KYRGYZSTANI</option>
				<option value="LAO, LAOTIAN">LAO, LAOTIAN</option>
				<option value="LATVIAN">LATVIAN</option>
				<option value="LEBANESE">LEBANESE</option>
				<option value="LIBERIAN">LIBERIAN</option>
				<option value="LIBYAN">LIBYAN</option>
				<option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
				<option value="LITHUANIAN">LITHUANIAN</option>
				<option value="LUXEMBOURGER">LUXEMBOURGER</option>
				<option value="MACANESE, MACANESE">MACANESE, MACANESE</option>
				<option value="MACEDONIAN">MACEDONIAN</option>
				<option value="MALAGASY">MALAGASY</option>
				<option value="MALAWIAN">MALAWIAN</option>
				<option value="MALAYSIAN">MALAYSIAN</option>
				<option value="MALDIVIAN">MALDIVIAN</option>
				<option value="MALIAN">MALIAN</option>
				<option value="MALTESE">MALTESE</option>
				<option value="MANX">MANX</option>
				<option value="MARSHALLESE">MARSHALLESE</option>
				<option value="MARTINIQUAIS, MARTINIQUAISE">MARTINIQUAIS, MARTINIQUAISE</option>
				<option value="MAURITANIAN">MAURITANIAN</option>
				<option value="MAURITIAN">MAURITIAN</option>
				<option value="MEXICAN">MEXICAN</option>
				<option value="MICRONESIAN">MICRONESIAN</option>
				<option value="MOLDOVAN">MOLDOVAN</option>
				<option value="MONACAN">MONACAN</option>
				<option value="MONGOLIAN">MONGOLIAN</option>
				<option value="MONTENEGRIN">MONTENEGRIN</option>
				<option value="MONTSERRATIAN">MONTSERRATIAN</option>
				<option value="MOROCCAN">MOROCCAN</option>
				<option value="MOSELLAN">MOSELLAN</option>
				<option value="MOZAMBICAN">MOZAMBICAN</option>
				<option value="NAMIBIAN">NAMIBIAN</option>
				<option value="NAURUAN">NAURUAN</option>
				<option value="NEPALESE">NEPALESE</option>
				<option value="NEW ZEALAND">NEW ZEALAND</option>
				<option value="NICARAGUAN">NICARAGUAN</option>
				<option value="NIGERIAN">NIGERIAN</option>
				<option value="NIUEAN">NIUEAN</option>
				<option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
				<option value="NORTHERN MARIANA ISLAND">NORTHERN MARIANA ISLAND</option>
				<option value="NORWEGIAN">NORWEGIAN</option>
				<option value="OMANI">OMANI</option>
				<option value="PAKISTANI">PAKISTANI</option>
				<option value="PALAUAN">PALAUAN</option>
				<option value="PALESTINIAN">PALESTINIAN</option>
				<option value="PANAMANIAN">PANAMANIAN</option>
				<option value="PAPUA NEW GUINEAN, PAPUAN">PAPUA NEW GUINEAN, PAPUAN</option>
				<option value="PARAGUAYAN">PARAGUAYAN</option>
				<option value="PERUVIAN">PERUVIAN</option>
				<option value="PITCAIRN ISLAND">PITCAIRN ISLAND</option>
				<option value="POLISH">POLISH</option>
				<option value="PORTUGUESE">PORTUGUESE</option>
				<option value="PUERTO RICAN">PUERTO RICAN</option>
				<option value="QATARI">QATARI</option>
				<option value="ROMANIAN">ROMANIAN</option>
				<option value="RUSSIAN">RUSSIAN</option>
				<option value="RWANDAN">RWANDAN</option>
				<option value="SABA">SABA</option>
				<option value="SAINT LUCIAN">SAINT LUCIAN</option>
				<option value="SALVADORAN">SALVADORAN</option>
				<option value="SAMOAN">SAMOAN</option>
				<option value="SAN MARINESE">SAN MARINESE</option>
				<option value="SAO TOMEAN">SAO TOMEAN</option>
				<option value="SAUDI, SAUDI ARABIAN">SAUDI, SAUDI ARABIAN</option>
				<option value="SCOTTISH">SCOTTISH</option>
				<option value="SENEGALESE">SENEGALESE</option>
				<option value="SERBIAN">SERBIAN</option>
				<option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
				<option value="SINGAPOREAN">SINGAPOREAN</option>
				<option value="SLOVAK">SLOVAK</option>
				<option value="SLOVENIAN">SLOVENIAN</option>
				<option value="SOLOMON ISLAND">SOLOMON ISLAND</option>
				<option value="SOMALI">SOMALI</option>
				<option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
				<option value="SOUTH GEORGIA">SOUTH GEORGIA</option>
				<option value="SOUTH KOREAN">SOUTH KOREAN</option>
				<option value="SOUTH SUDANESE">SOUTH SUDANESE</option>
				<option value="SPANISH">SPANISH</option>
				<option value="SRI LANKAN">SRI LANKAN</option>
				<option value="STATELESS">STATELESS</option>
				<option value="SUDANESE">SUDANESE</option>
				<option value="SURINAMESE">SURINAMESE</option>
				<option value="SWEDISH">SWEDISH</option>
				<option value="SWISS">SWISS</option>
				<option value="SYRIAN">SYRIAN</option>
				<option value="TAIWANESE">TAIWANESE</option>
				<option value="TAJIK">TAJIK</option>
				<option value="TANZANIAN">TANZANIAN</option>
				<option value="THAI">THAI</option>
				<option value="TOGOLESE">TOGOLESE</option>
				<option value="TONGAN">TONGAN</option>
				<option value="TRINIDADIAN">TRINIDADIAN</option>
				<option value="TRISTANIAN">TRISTANIAN</option>
				<option value="TUNISIAN">TUNISIAN</option>
				<option value="TURKISH">TURKISH</option>
				<option value="TURKMEN">TURKMEN</option>
				<option value="TURKS AND CAICOS ISLAND">TURKS AND CAICOS ISLAND</option>
				<option value="TUVALUAN">TUVALUAN</option>
				<option value="UGANDAN">UGANDAN</option>
				<option value="UKRAINIAN">UKRAINIAN</option>
				<option value="URUGUAYAN">URUGUAYAN</option>
				<option value="UZBEK">UZBEK</option>
				<option value="VANUATUAN">VANUATUAN</option>
				<option value="VENEZUELAN">VENEZUELAN</option>
				<option value="VIETNAMESE">VIETNAMESE</option>
				<option value="VINCENTIAN">VINCENTIAN</option>
				<option value="WALLISIAN">WALLISIAN</option>
				<option value="WELSH">WELSH</option>
				<option value="WESTERN SAHARA">WESTERN SAHARA</option>
				<option value="YEMENI">YEMENI</option>
				<option value="ZAMBIAN">ZAMBIAN</option>
				<option value="ZIMBABWEAN">ZIMBABWEAN</option>
			</select>
		</div>

		<div class="col-6">
			<select name="country" id="demo-category">
				<option disabled="" value="null" selected>Select Country</option>
				<option value="Nigerian"> NIGERIA</option>
				<option value="Antarctican"> ANTARCTICA</option>
				<option value="Hungarian"> HUNGARY</option>
				<option value="Icelandic"> ICELAND</option>
				<option value="Indian"> INDIA</option>
				<option value="Indonesian"> INDONESIA</option>
				<option value="Iranian"> IRAN</option>
				<option value="Iraqi"> IRAQ</option>
				<option value="Irish"> IRELAND</option>
				<option value="Manx"> ISLE OF MAN</option>
				<option value="Israeli"> ISRAEL</option>
				<option value="Italian"> ITALY</option>
				<option value="Antiguan or Barbudan"> ANTIGUA AND BARBUDA</option>
				<option value="Jamaican"> JAMAICA</option>
				<option value="Japanese"> JAPAN</option>
				<option value="Channel Islander"> JERSEY</option>
				<option value="Jordanian"> JORDAN</option>
				<option value="Kazakhstani"> KAZAKHSTAN</option>
				<option value="Kenyan"> KENYA</option>
				<option value="I-Kiribati"> KIRIBATI</option>
				<option value="North Korean"> KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
				<option value="South Korean"> KOREA, REPUBLIC OF</option>
				<option value="Kuwaiti"> KUWAIT</option>
				<option value="Argentinian"> ARGENTINA</option>
				<option value="Kyrgyz"> KYRGYZSTAN</option>
				<option value="Lao"> LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
				<option value="Latvian"> LATVIA</option>
				<option value="Lebanese"> LEBANON</option>
				<option value="Basotho"> LESOTHO</option>
				<option value="Liberian"> LIBERIA</option>
				<option value="Libyan"> LIBYAN ARAB JAMAHIRIYA</option>
				<option value="Liechtensteiner"> LIECHTENSTEIN</option>
				<option value="Lithuanian"> LITHUANIA</option>
				<option value="Luxembourgish"> LUXEMBOURG</option>
				<option value="Armenian"> ARMENIA</option>
				<option value="Macanese"> MACAO</option>
				<option value="Macedonian"> MACEDONIA</option>
				<option value="Malagasy"> MADAGASCAR</option>
				<option value="Malawian"> MALAWI</option>
				<option value="Malaysian"> MALAYSIA</option>
				<option value="Maldivian"> MALDIVES</option>
				<option value="Malian"> MALI</option>
				<option value="Maltese"> MALTA</option>
				<option value="Marshallese"> MARSHALL ISLANDS</option>
				<option value="Martiniquais"> MARTINIQUE</option>
				<option value="Aruban"> ARUBA</option>
				<option value="Mauritanian"> MAURITANIA</option>
				<option value="Mauritian"> MAURITIUS</option>
				<option value="Mahoran"> MAYOTTE</option>
				<option value="Mexican"> MEXICO</option>
				<option value="Micronesian"> MICRONESIA</option>
				<option value="Moldovan"> MOLDOVA</option>
				<option value="Monegasque"> MONACO</option>
				<option value="Mongolian"> MONGOLIA</option>
				<option value="Montenegrin"> MONTENEGRO</option>
				<option value="Montserratian"> MONTSERRAT</option>
				<option value="Australian"> AUSTRALIA</option>
				<option value="Moroccan"> MOROCCO</option>
				<option value="Mozambican"> MOZAMBIQUE</option>
				<option value="Burmese"> MYANMAR</option>
				<option value="Namibian"> NAMIBIA</option>
				<option value="Nauruan"> NAURU</option>
				<option value="Nepalese"> NEPAL</option>
				<option value="Dutch"> NETHERLANDS</option>
				<option value="Dutch Antillean"> NETHERLANDS ANTILLES</option>
				<option value="New Caledonian"> NEW CALEDONIA</option>
				<option value="New Zealander"> NEW ZEALAND</option>
				<option value="Austrian"> AUSTRIA</option>
				<option value="Nicaraguan"> NICARAGUA</option>
				<option value="Nigerien"> NIGER</option>
				<option value="Niuean"> NIUE</option>
				<option value="Norfolk Islander"> NORFOLK ISLAND</option>
				<option value="Northern Marianan"> NORTHERN MARIANA ISLANDS</option>
				<option value="Norwegian"> NORWAY</option>
				<option value="Omani"> OMAN</option>
				<option value="Pakistani"> PAKISTAN</option>
				<option value="Palauan"> PALAU</option>
				<option value="Palestinian"> PALESTINIAN TERRITORY</option>
				<option value="Azerbaijani"> AZERBAIJAN</option>
				<option value="Panamanian"> PANAMA</option>
				<option value="Papua New Guinean"> PAPUA NEW GUINEA</option>
				<option value="Paraguayan"> PARAGUAY</option>
				<option value="Peruvian"> PERU</option>
				<option value="Filipino"> PHILIPPINES</option>
				<option value="Pitcairn Islander"> PITCAIRN</option>
				<option value="Polish"> POLAND</option>
				<option value="Portuguese"> PORTUGAL</option>
				<option value="Puerto Rican"> PUERTO RICO</option>
				<option value="Qatari"> QATAR</option>
				<option value="Réunionese"> RÉUNION</option>
				<option value="Romanian"> ROMANIA</option>
				<option value="Russian"> RUSSIAN FEDERATION</option>
				<option value="Rwandan"> RWANDA</option>
				<option value="Saint Barthélemy"> SAINT BARTHÉLEMY</option>
				<option value="Saint Helenian"> SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA</option>
				<option value="Kittitian or Nevisian"> SAINT KITTS AND NEVIS</option>
				<option value="Saint Lucian"> SAINT LUCIA</option>
				<option value="Saint Martin Islander"> SAINT MARTIN</option>
				<option value="Saint-Pierrais or Miquelonnais"> SAINT PIERRE AND MIQUELON</option>
				<option value="Bahraini"> BAHRAIN</option>
				<option value="Saint Vincentian"> SAINT VINCENT AND THE GRENADINES</option>
				<option value="Samoan"> SAMOA</option>
				<option value="Sanmarinese"> SAN MARINO</option>
				<option value="São Toméan"> SAO TOME AND PRINCIPE</option>
				<option value="Saudi"> SAUDI ARABIA</option>
				<option value="Senegalese"> SENEGAL</option>
				<option value="Serbian"> SERBIA</option>
				<option value="Seychellois"> SEYCHELLES</option>
				<option value="Sierra Leonean"> SIERRA LEONE</option>
				<option value="Singaporean"> SINGAPORE</option>
				<option value="Afghan"> AFGHANISTAN</option>
				<option value="Bangladeshi"> BANGLADESH</option>
				<option value="Slovak"> SLOVAKIA</option>
				<option value="Slovenian"> SLOVENIA</option>
				<option value="Solomon Islander"> SOLOMON ISLANDS</option>
				<option value="Somali"> SOMALIA</option>
				<option value="South African"> SOUTH AFRICA</option>
				<option value="South Georgian or South Sandwich Islander"> SOUTH GEORGIA AND THE SOUTH SANDWICH
					ISLANDS</option>
				<option value="Spanish"> SPAIN</option>
				<option value="Sri Lankan"> SRI LANKA</option>
				<option value="Sudanese"> SUDAN</option>
				<option value="Surinamese"> SURINAME</option>
				<option value="Svalbardian or Jan Mayenian"> SVALBARD AND JAN MAYEN</option>
				<option value="Swazi"> SWAZILAND</option>
				<option value="Swedish"> SWEDEN</option>
				<option value="Swiss"> SWITZERLAND</option>
				<option value="Syrian"> SYRIAN ARAB REPUBLIC</option>
				<option value="Taiwanese"> TAIWAN, PROVINCE OF CHINA</option>
				<option value="Tajikistani"> TAJIKISTAN</option>
				<option value="Tanzanian"> TANZANIA, UNITED REPUBLIC OF</option>
				<option value="Thai"> THAILAND</option>
				<option value="Timorese"> TIMOR-LESTE</option>
				<option value="Belarusian"> BELARUS</option>
				<option value="Togolese"> TOGO</option>
				<option value="Tokelauan"> TOKELAU</option>
				<option value="Tongan"> TONGA</option>
				<option value="Trinidadian or Tobagonian"> TRINIDAD AND TOBAGO</option>
				<option value="Tunisian"> TUNISIA</option>
				<option value="Turkish"> TURKEY</option>
				<option value="Turkmen"> TURKMENISTAN</option>
				<option value="Turks and Caicos Islander"> TURKS AND CAICOS ISLANDS</option>
				<option value="Tuvaluan"> TUVALU</option>
				<option value="Burkinabé"> BURKINA FASO</option>
				<option value="Ugandan"> UGANDA</option>
				<option value="Ukrainian"> UKRAINE</option>
				<option value="Emirati"> UNITED ARAB EMIRATES</option>
				<option value="British"> UNITED KINGDOM</option>
				<option value="American"> UNITED STATES</option>
				<option value="Uruguayan"> URUGUAY</option>
				<option value="Uzbekistani"> UZBEKISTAN</option>
				<option value="Vanuatuan"> VANUATU</option>
				<option value="Venezuelan"> VENEZUELA</option>
				<option value="Vietnamese"> VIET NAM</option>
				<option value="Wallis and Futuna Islander"> WALLIS AND FUTUNA</option>
				<option value="Yemeni"> YEMEN</option>
				<option value="Zambian"> ZAMBIA</option>
				<option value="Zimbabwean"> ZIMBABWE</option>
				<option value="South Sudanese"> SOUTH SUDAN</option>
				<option value="Kosovar"> KOSOVO</option><!---->
			</select>
		</div>


		<div class="col-6">
			<select name="state" id="demo-category">
				<option disabled="" value="null" selected>Select State</option>
				<option value="BAYELSA"> BAYELSA </option>
				<option value="RIVERS"> RIVERS </option>
				<option value="IMO"> IMO </option>
				<option value="ABIA"> ABIA </option>
				<option value="AKWA IBOM"> AKWA IBOM </option>
				<option value="ANAMBRA"> ANAMBRA </option>
				<option value="EBONYI"> EBONYI </option>
				<option value="ENUGU"> ENUGU </option>
				<option value="DELTA"> DELTA </option>
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
				<option value="BAUCHI"> BAUCHI </option>
				<option value="KANO"> KANO </option>
				<option value="JIGAWA"> JIGAWA </option>
				<option value="YOBE"> YOBE </option>
				<option value="KATSINA"> KATSINA </option>
				<option value="KEBBI"> KEBBI </option>
				<option value="ZAMFARA"> ZAMFARA </option>
				<option value="SOKOTO"> SOKOTO </option>
				<option value="OTHERS"> OTHERS </option><!---->
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
			<input type="text" name="street_name" id="str_name">
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
			<input type="text" name="matric_no">
		</div>


		<div class="col-12">
			<select name="level" id="level">
				<option value="" disabled="" selected>Select level of study</option>
				<option value="100lv">100lv</option>
				<option value="200lv">200lv</option>
				<option value="300lv">300lv</option>
				<option value="400lv">400lv</option>
				<option value="500lv">500lv</option>
				<option value="600lv">600lv</option>
				<option value="700lv">700lv</option>
			</select>
		</div>

		<div class="col-6">
			<select name="faculty" id="faculty">
				<option value="" selected disabled="">Select Faculty</option>
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
			<input type="text" name="department" id="department" placeholder="Enter Department">
		</div>

		<!-- Break -->
		<p class="mt-3 display-6 fw-bolder">Bank Info</p>
		<hr class="major mt-1 mb-1">
		<div class="row">
			<div class="col-6">
				<select name="bank_name" id="bank">
					<option value="" selected disabled="">Select Bank</option>
					<option value="Accion Microfinance Bank">Accion Microfinance Bank</option>
					<option value="Advans La Fayette Microfinance Bank">Advans La Fayette Microfinance Bank</option>
					<option value="Citibank Nigeria Limited">Citibank Nigeria Limited</option>
					<option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
					<option value="Covenant Microfinance Bank Ltd">Covenant Microfinance Bank Ltd</option>
					<option value="Dot Microfinance Bank">Dot Microfinance Bank</option>
					<option value="Ecobank Nigeria">Ecobank Nigeria</option>
					<option value="Empire Trust Microfinance Bank">Empire Trust Microfinance Bank</option>
					<option value="FairMoney Microfinance Bank">FairMoney Microfinance Bank</option>
					<option value="FBNQuest Merchant Bank">FBNQuest Merchant Bank</option>
					<option value="Fidelity Bank Plc">Fidelity Bank Plc</option>
					<option value="Finca Microfinance Bank Limited">Finca Microfinance Bank Limited</option>
					<option value="First Bank of Nigeria Limited">First Bank of Nigeria Limited</option>
					<option value="First City Monument Bank Limited">First City Monument Bank Limited</option>
					<option value="FSDH Merchant Bank">FSDH Merchant Bank</option>
					<option value="Globus Bank Limited">Globus Bank Limited</option>
					<option value="Guaranty Trust Holding Company Plc">Guaranty Trust Holding Company Plc</option>
					<option value="Infinity Microfinance Bank">Infinity Microfinance Bank</option>
					<option value="Jaiz Bank Plc">Jaiz Bank Plc</option>
					<option value="Keystone Bank Limited">Keystone Bank Limited</option>
					<option value="Kuda Bank">Kuda Bank</option>
					<option value="Lotus Bank">Lotus Bank</option>
					<option value="Mint Finex MFB">Mint Finex MFB</option>
					<option value="Mkobo MFB">Mkobo MFB</option>
					<option value="Moneyfield Microfinance Bank">Moneyfield Microfinance Bank</option>
					<option value="Moniepoint Microfinance Bank">Moniepoint Microfinance Bank</option>
					<option value="Mutual Trust Microfinance Bank">Mutual Trust Microfinance Bank</option>
					<option value="Nova Merchant Bank">Nova Merchant Bank</option>
					<option value="Opay">Opay</option>
					<option value="Optimus Bank Limited">Optimus Bank Limited</option>
					<option value="Palmpay">Palmpay</option>
					<option value="Parallex Bank Limited">Parallex Bank Limited</option>
					<option value="Peace Microfinance Bank">Peace Microfinance Bank</option>
					<option value="Polaris Bank Limited">Polaris Bank Limited</option>
					<option value="PremiumTrust Bank Limited">PremiumTrust Bank Limited</option>
					<option value="Providus Bank Limited">Providus Bank Limited</option>
					<option value="Raven Bank">Raven Bank</option>
					<option value="Rephidim Microfinance Bank">Rephidim Microfinance Bank</option>
					<option value="Rex Microfinance Bank">Rex Microfinance Bank</option>
					<option value="Rubies Bank">Rubies Bank</option>
					<option value="Signature Bank Limited">Signature Bank Limited</option>
					<option value="Sparkle Bank">Sparkle Bank</option>
					<option value="Stanbic IBTC Bank Plc">Stanbic IBTC Bank Plc</option>
					<option value="Stanbic IBTC NIB">Stanbic IBTC NIB</option>
					<option value="Standard Chartered">Standard Chartered</option>
					<option value="Sterling Bank Plc">Sterling Bank Plc</option>
					<option value="SunTrust Bank Nigeria Limited">SunTrust Bank Nigeria Limited</option>
					<option value="SunTrust Bank Nigeria limited NIB">SunTrust Bank Nigeria limited NIB</option>
					<option value="TAJBank Limited">TAJBank Limited</option>
					<option value="Titan Trust Bank Limited">Titan Trust Bank Limited</option>
					<option value="Union Bank of Nigeria Plc">Union Bank of Nigeria Plc</option>
					<option value="United Bank for Africa Plc">United Bank for Africa Plc</option>
					<option value="VFD Microfinance Bank">VFD Microfinance Bank</option>
					<option value="Wema Bank">Wema Bank</option>
					<option value="Zenith Bank Plc">Zenith Bank Plc</option>
				</select>
			</div>

			<div class="col-6">
				<input type="text" name="account_name" id="account_name" placeholder="Enter Account Name ">
			</div>

		</div>

		<div class="col-6">
			<input type="text" name="account_no" id="account_number" placeholder="Enter Account Number">
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
				<li><input type="submit" value="Register" class="primary" id="myform" /></li>
				<!-- <li><input type="reset" value="Reset" /></li> -->
			</ul>
		</div>

	</div>
</form>