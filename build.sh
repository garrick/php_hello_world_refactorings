#/bin/bash
if [ "$1" == "coverage" ]; then
   EXTRA="--coverage-html target";
fi
./phpunit.phar --colors $EXTRA Tests/
