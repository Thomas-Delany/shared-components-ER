#This project is now being undertaken in a separate private repo due to the limitations of having begun this project without a framework. I am now continuing the work with Laravel, PHP, Bootstrap and Blade, which will provide a much more professional setting in which to work and thus allow me to keep all the code much more modular and DRY. Let this repo serve as a prototype for what’s to come as you can read from the Readme file. 

#Shared-components-ES

I have decided to make the “shared-components-ER” central submodule repository public to showcase the English Reservoir project and transparently illustrate my objectives going forward.

Shared-components-ER acts as a centrally controlled repository which is to be inserted as a submodule in all other English Reservoir domain-specific repos to therefore centrally control the layout and styling of English Reservoir country-specific domains thus allowing for a much more streamlined approach whilst also ensuring adherence to the DRY principle in software development.

The layout and styling of Shared-components-ER uses the CSS framework Bootstrap, whilst the backend makes use of PHP. I chose PHP because of its simplicity and easiness in the central management of all English Reservoir domain-specific repos, all of which will include Share-components-ER as a submodule.

Importantly, given that the goal of the English Reservoir project is to provide a reservoir of content that is both highly resourceful and free regarding all aspects of the English Language to English learners across the globe, I decided that both PHP and Bootstrap would suffice given their stability and extended adaptation across the web. I have decided to make use of PHP and Bootstrap in this centrally controlled repo because my main goal is to be able to easily maintain the extended infrastructure in all the domain-specific repos while also freeing up time to focus on the more pedagogical aspects of this project, and so PHP and Bootstrap are suited nicely to this purpose.

Principally, this project’s primary goal is to serve as a central repo to centrally control all of English Reservoir’s domain-specific repos (which are private), and which, over time, I will make active, are the following:

- englishreservoir.es 🇪🇸 > inactive (currently in the process of migrating away from WordPress)
- englishreservoir.com 🌐 > inactive (currently in the process of migrating away from WordPress)
- englishreservoir.co.uk 🇬🇧 (template domain)
- englishreservoir.de 🇩🇪 > inactive
- englishreservoir.fr 🇫🇷 > inactive
- englishreservoir.in 🇮🇳 > inactive
- englishreservoir.it 🇮🇹 > inactive
- englishreservoir.cn 🇨🇳 > inactive
- englishreservoir.pl 🇵🇱 > inactive
- englishreservoir.pt 🇵🇹 > inactive

To get a better idea of this project’s scope, if you visit englishreservoir.com 🌐 you shall see an entire reservoir of content covering all aspects of the English language, from grammar to pronunciation to punctuation and much more. Thus, as I progressively build each country level domain, said domains will include identical folder and file structures of the content from our main page using .com.

In essence, all country-level domains will contain the same content as can be found on .com, only the translated versions for each respective language group. Further, each country-level domain will also serve as an access point to the interactive learning platform for each country, on which, more information can be viewed from its public repo here:

https://github.com/Thomas-Delany/Subdomain-with-React

So, due to identical folder and file structure for the numerous content pages and said pages having homogeneity in styling and layout in all country-level domains, it only makes sense that I should control the layout, styling, and backend centrally. Therefore, I can streamline the entire workflow much better, and all unique content as per each country or language group shall be kept in JSON files in their respective domain-specific private repos.

As English Reservoir’s aim is to provide free English learning resources and content to all language groups globally, each country code top level domain (CCTLD) will serve as an entry point for a specific language group. For instance, a Chinese speaker who is learning English is highly likely to query any English language doubt in their native tongue, and our objective is to meet that demand by providing them with excellent free content and resources.

Furthermore, regarding the IT specifics of this project, shared-components-ER uses dynamic routing with “page.php”, found in the root of this repo, which serves as the central point from which to dynamically handle all our content pages for all cctlds in which this submodule (Shared-components-ER) is inserted, thus ensuring a very centralized and easily maintainable logic, layout and styling for all CCTLDs.

Other technical points to note about this project:

(1) I am currently in the process of migrating my two active sites .es and .com away from their existing infrastructure on WordPress, that is, extracting all the page data to JSON, and I’ve made use of the following Python script ‘export_wp_pages.py’ to extract said data using the WordPress API.

(2) I’ve made extensive use of PHP foreach loops, in particular, to loop over all the data from the json files (located in their respective domain-specific repos), because I found this to be the most straightforward approach.

(3) Meta data for the numerous content pages for each domain such as php variables that mostly serve as a sort of toggle switch for images, YouTube videos, Table of Contents etc., will be stored in their corresponding json files within their respective domain-specific repos, whilst some PHP code will be stored in config.php in the root of this repo. This file "config.php" will be automatically prepended to my pages using .htaccess.

(4) Although “englishreservoir.co.uk” (https://github.com/Thomas-Delany/English_Reservoir) serves as more of a testing ground (before I actually enact any changes in the other cctlds), I plan to also serve the englishreservoir.co.uk domain with the shared-components-ER submodule too.

(5) Google ads and some third-party link insertions are in place on .com, and will also be implemented on all other cctld’s in order to obtain some financial gains whilst always maintaining the content for all domains free to the end user.

(6) As part of a separate project, but also related, one of my other repos, https://github.com/Thomas-Delany/Subdomain-with-React is a project geared towards building an English learning platform which aims to be highly interactive, gamified, in-depth, and above all - fun, for all country level domains. I am building this with React and Tailwind, and I would highly recommend you also check out its repo (above) to get more information on that project too.

Any feedback or contributions (either to the codebase or financial) to the English Reservoir project would be highly appreciated.

Thomas
