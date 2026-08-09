# Déploiement sur Vercel

Prérequis
- Un dépôt Git (GitHub/GitLab) contenant ce projet.
- Un compte Vercel connecté au fournisseur Git.

Étapes rapides

1. Générer `APP_KEY` localement :

```bash
php artisan key:generate --show
```

2. Commit et push (exemples) :

```bash
git add vercel.json DEPLOY-VERCEL.md
git commit -m "chore: add Vercel config and deploy instructions"
git push origin main
```

3. Importer le projet sur Vercel
- Dans Vercel, "New Project" → sélectionnez le repo → racine = `/`.
- Le projet contient un `Dockerfile`, donc Vercel doit l’utiliser automatiquement.
- Ne créez pas `vercel.json` avec une section `builds`, car cela peut forcer un builder non publié.

4. Configurer les variables d'environnement (Settings → Environment Variables)
- `APP_KEY` : valeur générée à l'étape 1
- `APP_ENV`, `APP_DEBUG=false`, `APP_URL` (URL fournie par Vercel ou domaine personnalisé)
- `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- `MAIL_*` si vous envoyez des emails

Remarques importantes
- Vercel n'offre pas de stockage persistant ni de base de données gérée ; utilisez une base externe (PlanetScale, Neon, RDS, etc.) et un stockage d'objets (S3) pour les fichiers.
- Les tâches longues / workers / queues (ex : `php artisan queue:work`) ne doivent pas être exécutées sur Vercel — utilisez un service dédié (Render, Railway, Heroku worker, GitHub Actions, ou un container séparé).
- Le `Dockerfile` écoute le port `${PORT:-10000}` : Vercel injecte `PORT`, donc c'est compatible.
- Assurez-vous que `composer.lock` et `package-lock.json`/`pnpm-lock.yaml` (si utilisés) sont présents pour des builds reproductibles.

Dépannage rapide
- Si le build échoue, consulter les logs Vercel et vérifier que toutes les variables d'environnement requises sont définies.
- Si vous avez besoin d'exécuter des migrations automatiquement, exécutez-les depuis CI (GitHub Actions) ou manuellement via un runner disposant d'un accès à la base.

Si vous voulez, je peux aussi :
- créer un workflow GitHub Actions pour exécuter `php artisan migrate` après déploiement, ou
- tenter de pousser le commit pour vous dès maintenant (peut demander authentification).
