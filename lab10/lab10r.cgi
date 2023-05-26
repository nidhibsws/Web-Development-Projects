#!/usr/bin/ruby -w
puts "Content-type: text/html\n\n"
require 'cgi'
cgi = CGI.new

puts "<html><head>"
puts "<title>Lab10r Nidhi Biswas</title>"
puts "<link rel='preconnect' href='[https://fonts.googleapis.com](https://fonts.googleapis.com/)'>"
puts "<link rel='preconnect' href='[https://fonts.gstatic.com](https://fonts.gstatic.com/)' crossorigin>"
puts "<link href='[https://fonts.googleapis.com/css2?family=sans-serif&display=swap](https://fonts.googleapis.com/css2?family=sans-serif&display=swap)' rel='stylesheet'>"
puts "<style>body{font-family:'sans-serif';padding:10;margin:0;}</style>"
puts "</head><body>"
puts "<p style='text-align:center;'>Lab 10 Nidhi Biswas Ruby Script</p>"
puts "<div style='margin:0;padding:0;'>"
puts "<h1 style='text-align:center;font-size:50px;background:pink;'>" + cgi['cityname'].capitalize() + ", " + cgi['provincestate'].capitalize() + ", " + cgi['countryname'].capitalize() + "</h1>"
puts "<img src= '" + cgi['photourl'] + "'style='width:100%;'/></div>"
puts "</body></html>"