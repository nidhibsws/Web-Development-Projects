#!/usr/bin/perl 
use CGI':standard';
use strict;
use CGI::Carp qw(warningsToBrowser fatalsToBrowser); 

print "Content-type: text/html\n\n";
print "<!DOCTYPE html>";
print "<html><head><title>registration form</title></head>";
print "<body>";
print "<h2>complete the form :</h2>";


@pairs = split(/&/, $buffer);
foreach $pair (@pairs) {
($name, $value) = split(/=/, $pair);
$value =~ tr/+/ /;
$value =~ s/%(..)/pack("C", hex($1))/eg;
$FORM{$name} = $value;
}
$first_name = $FORM{first_name};
$last_name  = $FORM{last_name};
$streetname = $FORM{streetname};
$city = $FORM{city};
$postalcode = $FORM{postalcode};
$province = $FORM{province};
$phone = $FORM{phone};
$email = $FORM{email};
$photograph = $FORM{photograph};

print "<input type="SUBMIT" value="GO">";
print "</body></html>";


