# shared-components-ER

1. Create a new GitHub repo (private) called "shared-components-ER" for the central control for all shared components.

2. Set up the shared repo, and include all the necessary files, navbar.php, sidebar.php etc.

3. Create a domain-specific repo (englishreservoir.es) for domain specific content. Create new page structure that copies exactly the same page structure as the .es domain.

4. Add the central repo as a Git Submodule within each domain-specific repo.

- cd /path/to/englishreservoir-es
- git submodule add https://github.com/your-username/englishreservoir-shared-components.git shared-components
  // Initialize and Update the Submodule.
- git submodule init
- git submodule update

5. Commit the updated submodule to the domain-specific repository:
   cd ..
   git add shared-components
   git commit -m "Update shared components"
   git push origin main

6. Within the domain specific repo, include the shared components like this in your PHP files, for example, "<?php include 'shared-components/navbar.php'; ?>".

-) Create a URL Mapping Table. Before migration, compile a list of existing URLs from your WordPress site (e.g., /distributive-adjectives/ https://www.englishreservoir.es/page-sitemap.xml

-) Extracting Data from WordPress. Tools > Export, select "All content," and export it as an XML file. Consider using plugins like WP All Export or WP Migrate DB. These tools allow you to export specific content fields, filter content, and even generate JSON/CSV files directly.

-) Create script to insert content into englishreservoir.es from the JSON files.

-) Insert Google Analytics code to test the migration.
