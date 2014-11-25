Valentin-LE-MELLAY_WEB2_A3
==========================

Rendu pour le cours 3 de PHP.


[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Valentyn56/Valentin-LE-MELLAY_WEB2_A3/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Valentyn56/Valentin-LE-MELLAY_WEB2_A3/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/Valentyn56/Valentin-LE-MELLAY_WEB2_A3/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Valentyn56/Valentin-LE-MELLAY_WEB2_A3/?branch=master) [![Build Status](https://travis-ci.org/Valentyn56/Valentin-LE-MELLAY_WEB2_A3.svg?branch=master)](https://travis-ci.org/Valentyn56/Valentin-LE-MELLAY_WEB2_A3)

Documentation

IntegerValidator

The IntegerValidator class can verify different things between Integers with the following methods : 
  - equal : Return true if two Integers are equals.
  - superior : Return true if the first integer in superior than the second.
  - inferior : Return true if the first integer in inferior than the second.
  - between : Return true if the variable is between two integers.
  - positive : Return true if the Integer is superior than 0.
  - negative : Return true if the Integer is inferior than 0.
  
StringValidator

The StringValidator class can verify different things between Strings with the following methods :
  - equal : Return true if two Strings are equals.
  - superior : Return true if the String lenght is superior than a Integer.
  - inferior : Return true if the String lenght is inferior than a Integer.
  - lenghtBetween : Return true if the String lenght is between two Integers.
  - space_start_end : Return true if there is white space at the beginning or the end of the String.
  - noWhiteSpace : Return true if the String have not white spaces.
  
BooleanValidator

The BooleanValidator class can verify if a Boolean variable is true or false.
  - isTrue : Return true if the boolean is true.
  
ArrayValidator

The ArrayValidator class can verify different things in an array and between arrays.
  - isEmpty : Return true if the array is empty.
  - comparator : Compare the array length (<,>,<=,>=,=).
  - elementsBetween : Return true if the array lenght is between two integers.
  - keyExists : Return true if the searched key is in the array.
  - valueExists : Return true if the searched value is in the array.
  
DateTimeValidator

The DateTimeValidator class can verify different things for the date time with the following methods : 
  - isMajor : Return true if the date in parameter has over 18 years old.
  - isPassed : Return true if the date in parameter is passed of the current date time.
  - isFuture : Return true if the date in parameter is not passed yet.
  - isYear : Return true if the date in parameter is in the year in second parameter.
  - isMonth : Return true if the date in parameter is in the month in second parameter.
  - isDay : Return true if the date in parameter is in the day in second parameter.








