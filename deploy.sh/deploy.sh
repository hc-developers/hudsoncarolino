PROJECT_PATH=/..
NOW=$(date +"%Y-%m-%d (%Hh%Mm%Ss)")

deploy () {
   echo "Deploy hudsoncarolino front project ${NOW}..."
   su -c "cd $PROJECT_PATH && git reset --hard && git pull origin main && npm i --no-save
}
