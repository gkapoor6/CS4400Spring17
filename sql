For all screens, check if all fields are filled.
LOGIN
1) Check if username exists. If not, throw error [UI]. If yes:
	a) check password for that username. If not correct, throw error [UI].
		a) if correct:
			SELECT TypeOfUser FROM User WHERE username = "$username";
			a) return type of user to the UI. Then UI switches to new screen accordingly [UI].
REGISTER
1) Check if username unique. Insertion into database will automatically be denied,
so just check for error.
2) Check if email unique.
3) Check if password and confirm password match [UI].
4) If TypeOfUser selected == "City Official" [UI]
	a) check if city, state, title != NULL
	b) check if city, state combo unique (automatically checked because PK)
	c) SELECT CITY WHERE STATE = "$state" returns list of all cities.
		a) check if city matches one of the results (SELECT CITY WHERE CITY = "$city")
	d) INSERT username, email, password in table (depending on TypeOfUser)

DATA POINT
1) Check if data value is integer
2) INSERT in DataPoint table

POI LOCATION
1) check if city, state combo unique (automatically checked because PK)
	SELECT CITY WHERE STATE = "$state" returns list of all cities.
		a) check if city matches one of the results (SELECT CITY WHERE CITY = "$city")
2) SELECT zipCode FROM POI WHERE POILocName = $var$
	a) if empty table, add zip code (insert)
	b) else check if zipCode returned = "$zipCode entered$"

ADMIN (ACCEPT/REJECT DataPoint)
1) Sorting MUST be enabled in the UI.
2) Populate table - SELECT * FROM DataPoint WHERE isAccepted = false
3) UPDATE isAccepted wherever there is a check mark

ADMIN (ACCEPT/REJECT CityOfficials)
1)  Populate table - SELECT * FROM CityOfficial WHERE isAccepted = false

CITY OFFICIAL (Filter/Search POI)
1)default type for each field in the UI must be "null" (and not a valid entry such as GeorgiaTech)
2) How to write queries with variable number of arguments
*whatever the user clicks on the results from the View POIs screen,
display on the POI Detail screen

*display the name of the clicked-on "POI Location: georgia tech" on the top of the POI Detail GUI

CITY OFFICIAL (POI Detail)
1) Sorting in UI
2) SELECT datetime, datavalue, dateTime FROM DataPoint
	WHERE POILocName = "$var$"
	* flag/radiobutton/checkbox on top of the POI Detail page must be clickable.
	When clicked-on it must flag POI's isFlagged attribute (using UPDATE below)'
	a) UPDATE POI SET isFlagged = "$var" (true or false) WHERE POILocName = "$var"
3) Filtering - question How to write queries with variable number of arguments

CITY OFFICIAL (Report)
1) Do we need a join?
SELECT min(datavalue) AS "Mold Min" FROM POI where type="mold" group by POILocName;