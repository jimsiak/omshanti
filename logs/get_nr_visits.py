#!/usr/bin/env python

import sys

if (len(sys.argv) <= 1):
	sys.stderr.write("usage: " + sys.argv[0] + " <logfile ..>\n")
	sys.exit(1)

nr_visits = 0
ips_already_seen = []

for logfile in sys.argv[1:]:
	print logfile

	fp = open(logfile, "r")

	line = fp.readline()
	while line:
		tokens = line.split()

		ip = tokens[0]
		date = tokens[3]
		month = date.split("/")[1] # date example [13/Sep/2014:02:37:53
#		print ip, date, month

		if not ip in ips_already_seen:
			nr_visits += 1
			ips_already_seen.append(ip)

		line = fp.readline()

	fp.close()

print ips_already_seen
print len(ips_already_seen)
print nr_visits
