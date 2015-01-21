# HKSA-WordPress-Theme
This is a wordpress I created for Hong Kong Student Association at University of Washington in 2013
http://students.washington.edu/hksa/
[Basic structure](##Basic Structure)
[Simple tasks](## Tasks)
## Basic Structure
Using WordPress for the student organization’s website has the advantage of easy management for people without web development background. It was designed with responsive web design approach to allow easy navigation on all kind of device with different monitor size.
In order to have a consistence design across all the pages, I designed a few templete pages for the mainfunctionality of the site:

1.  **Front page**

    Index page, logo with a randomly picked background image
    Edit page: Pages > Front Page Images
    Structure:

    ```html
    <img src="image1_url" />
    <img src="image2_url" />
    ```
    ![Front page image](screenshots/front_page.png?raw=true)

2.  **About page**

    Consists of a image with a small description
    Edit page: Pages > about us, about hk, contact, event descriptions, join us…
    Structure:

    ```html
    <img src="top_image_url" />
    <h1>title</h1>
    <p>content</p>
    ```
    ![About page image](screenshots/about_page.png?raw=true)

3.  **Officers page**

    Shows a list of officers grouped by their position
    Structure:

    ```html
    <h1>Position</h1>
    Officer Name 1
    Year - Major
    <img style="background-size: width height;
    background-position: x-displace y-displace;"
    src="profile_pic_url" />

    Officer Name 2
    Year - Major
    <img src="profile_pic_url" />

    <hr />
    ```
    ![Officers page image](screenshots/officer_dp_edit_3.png?raw=true)

4.  **Sponsors page**

    Shows a list of companies that support the organization
    ![sponsors page](screenshots/sponsors_and_discount_view.png?raw=true)

5.  **Event page**

    Shows the detils of event, with an optional gallery
    ![event page screen](screenshots/event_view.png?raw=true)


6.  **Navigation page for mobile browser**

    Shows a list of options for mobile user to navigate
    ![navigation page screen](screenshots/menu.png?raw=true)


## Tasks
###update officers
The office page show a list of officers grouped in their rol
![about page](screenshots/page_edit.png?raw=true)

1.  From the menu, select Pages
2.  Select  Officer page or create a new page
3.  Make sure the textbox is in text mode
4.  At the page attribute box, make sure the template is "about page custom".
5.  Change Image and name in different content

###Update about pages
![about page](screenshots/page_edit.png?raw=true)

1.  From the menu, select Pages
2.  Select page you want to edit
3.  Make sure the textbox is in text mode
4.  At the page attribute box, make sure the template is "about page custom". Select the corresponding parent. (e.g. About for About Hong Kong, Fall for Orientation. Just follow the menu)
5.  Edit the textbox
    Basic structure of a about page is:
    <img src="top image" />
    <h1>title</h1>
    <p>content</p>
    ```html
    <p><a href="http://students.washington.edu/hksa/wordpress/wp-content/uploads/2013/07/IMG_3181_color2s.jpg"><img src="http://students.washington.edu/hksa/wordpress/wp-content/uploads/2013/07/IMG_3181_color2s.jpg" alt="IMG_3181_color2s" width="1000" height="456" class="alignnone size-full wp-image-12" /></a></p>
    <h1>ABOUT HONG KONG</h1>
    <p>The smells, sounds, and views which can only be attributed to Hong Kong are the factors which make the city unique. The public activity and dynamic trends keeps this city moving constantly. In addition, its nightlife from the people to the lights offers a truly amazing experience.</p>
    ```
6.  Upload images
    1. Add Media
    2. Upload image or select image
    3. Insert into page
    4. The code representing the image should look like this:
    ```html
    <p><a href="http://students.washington.edu/hksa/wordpress/wp-content/uploads/2013/07/IMG_3181_color2s.jpg"><img src="http://students.washington.edu/hksa/wordpress/wp-content/uploads/2013/07/IMG_3181_color2s.jpg" alt="IMG_3181_color2s" width="1000" height="456" class="alignnone size-full wp-image-12" /></a></p>
    ```

###Change events
Event page is a variation of the about page
![event pages](screenshots/page_edit.png?raw=true)

1.  From the menu, select Pages
2.  Create a new page
3.  At the page attribute box, make sure the template is "about page custom".
4.  Make sure the textbox is in text mode
5.  Change Image and name in different content

###Editing the Menu
![menu_edit](screenshots/menu_edit.png?raw=true)

1.  Go to Apperance > Menu
2.  Search from the pages and add it to the menu
3.  Drag the item to arrange the order

###Update front page image
Everytime front page is loaded, it randomly pickes an image from this list
![front page image](screenshots/frontpageimage_edit.png?raw=true)

1.  Find the page "Front Page Images" in the Page menu
2.  Add or remove the image on the page

###Add sponsor
Every post represent a sponsor, which are group into different area with tag "u-district", "internation district" and other
The sponsor page shows all the posts and group them into different area
![front page image](screenshots/frontpageimage_edit.png?raw=true)

1.  Go to post
2.  A

###Remove sponsor
Delete the post representing the sponsor

Important:
disable comments in all new page to avoid spams

Based on this tutorial
http://themeshaper.com/2012/10/22/the-themeshaper-wordpress-theme-tutorial-2nd-edition/