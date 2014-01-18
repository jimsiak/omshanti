#!/bin/bash

commands=('getsize' 'resize')

function print_usage {
	echo -e "usage: $0 command [args ..]\n" \
	        " available commands:" >&2
	for comm in ${commands[@]}; do
		echo "    $comm" >&2
	done
}

function do_getsize {
	if [ "x$1" == "x" ]; then
		echo "no file given"
		return
	fi
	for imgfile in $@; do
		size=$(identify -format "%wx%h" $imgfile)
		echo "$imgfile size: $size"
	done
}

if [ "x$1" == "x" -o "x$1" == "x-h" ]; then 
	print_usage
	exit 1
fi

command=$1
case $command in
${commands[0]})
	do_getsize ${@:2}
	;;
${commands[1]})
	echo "$command Not implemented Yet."
	;;
*)
	print_usage
	exit 1
	;;
esac


exit
