DEST="./dist"

mkdir -p "$DEST/about/"
SCRIPT_FILENAME=index.php REQUEST_URI=/ php index.php > "./$DEST/index.html"
SCRIPT_FILENAME=index.php REQUEST_URI=/about php index.php > "./$DEST/about/index.html"
SCRIPT_FILENAME=index.php REQUEST_URI=/about/team php index.php > "./$DEST/about/team.html"
