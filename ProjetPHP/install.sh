#!/bin/sh
# Installe le code sur un serveur

# Nom du sous répertoire ou le projet est installé
DIR=Bricomachin

# Liste des répertoires à tester pour copier le code
# Pour l'installer ailleur, ajouter des réprtoires ici
PATH_LIST=(~/public_html ~/Sites)
ROOT=''

# Selectionne le premier répertoire correct
for p in "${PATH_LIST[@]}"
do
  # Arrete dès qu'un répertoire est trouvé
  if [ -d "$p" ]
  then
    ROOT=$p
    break
  fi
done

# Test si le répertoire est non vide
if [ -z "$ROOT" ]
then
  echo "Erreur: aucun chemin d'installation valide trouvé ..."
  exit 1
fi

# Chemin final
dest=$ROOT/$DIR

echo "Installation dans $dest"

# Creation du réprtoire au cas ou il n'existe pas
mkdir -p "$dest"

# Liste des fichiers et réprtoires à copier
FILE_LIST=(index.php controler data model view)

# Copie incrémentale par rsync
for src in "${FILE_LIST[@]}"
do
 rsync -av $src $dest
done
