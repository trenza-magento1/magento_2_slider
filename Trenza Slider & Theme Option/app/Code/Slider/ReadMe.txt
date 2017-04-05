1.Extract Folder
Copy Trenza Folder to YourSite/app/code/ past here
and enable your theme module by using cmd
php bin/magento module:enable Trenza_Slider
and then use this code
php bin/magento setup:upgrade

2. copy Magento_theme folder past it to your theme directory.
3. called the slider.phtml block use this code to called it..
Example in your theme/Magento_Theme/layout/cms_index_index.xml
past this block code
<block class="Magento\Framework\View\Element\Template" name="home_slider_large" as="home_slider_large" template="Magento_Theme::news2.phtml" after="-">
		   
<arguments><argument translate="true" name="title" xsi:type="string">Home slider</argument>
</arguments>
		
</block>

Done.....