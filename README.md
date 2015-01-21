# HKSA-WordPress-Theme
This is a wordpress I created for Hong Kong Student Association at University of Washington in 2013
http://students.washington.edu/hksa/
## Basic Structure
Using WordPress for the student organization’s website has the advantage of easy management for people without web development background. It was designed with responsive web design approach to allow easy navigation on all kind of device with different monitor size.
In order to have a consistence design across all the pages, I designed a few templete pages for the mainfunctionality of the site:

1.  **Front page**
    ![Front page image](screenshots/front_page.png?raw=true)

2.  **About page**
    ![About page image](screenshots/about_page.png?raw=true)
    About pages includes about us, about hk, contact, event descriptions, join us…
    Consists of a image with a small description

3.  **Officers page**
    ![Officers page image](screenshots/officer_dp_edit.png?raw=true)
    Shows a list of officers grouped by their position

4.  **Sponsors page**
    ![sponsors page](screenshots/sponsors_and_discount_view.png?raw=true)
    Shows a list of companies that support the organization

5.  **Event page**
    ![event page screen](screenshots/event_view.png?raw=true)
    Display a Event, with gallery

6.  **Navigation page for mobile browser**
    ![navigation page screen](screenshots/navigation_menu?raw=true)
    Shows a list of options for mobile user to navigate

## Tasks
###Update about pages

[about page](screenshots/page_edit.png)

1.  from the menu select Pages
2.  select page you want to edit
3.  Make sure the textbox is in text mode
4.  At the page attribute box, make sure the template is "about page custom". Select the corresponding parent. (e.g. About for About Hong Kong, Fall for Orientation. Just follow the menu)
5.  Edit the textbox
    Basic structure of a about page is:
    ```html
    <!-- top image -->
    <p><a href="http://students.washington.edu/hksa/wordpress/wp-content/uploads/2013/07/IMG_3181_color2s.jpg"><img src="http://students.washington.edu/hksa/wordpress/wp-content/uploads/2013/07/IMG_3181_color2s.jpg" alt="IMG_3181_color2s" width="1000" height="456" class="alignnone size-full wp-image-12" /></a></p>
    <!-- title -->
    <h1>ABOUT HONG KONG</h1>
    <!-- content -->
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

###update officers

###Change events
###Change Menu
###Update front page image

###Update sponsor


Important:
disable comments in all new page to avoid spams

Based on this tutorial
http://themeshaper.com/2012/10/22/the-themeshaper-wordpress-theme-tutorial-2nd-edition/