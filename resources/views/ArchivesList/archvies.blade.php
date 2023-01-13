@extends('layouts.app')
@section('archives')
    <div id="content">
        <!-- Page Items -->
        <div class="pageitem">
            <h2>Paragraphs, Links, and a Blockquote</h2>
            <p class="sub">Sed sed neque sed quam aliquet mattis.</p>
            <p>Sed quis ultricies ligula. Pellentesque vel dolor quis massa vehicula dictum at id magna. Proin eleifend sapien in porttitor bibendum. Aliquam lacinia rutrum dui at tempor. <a href="#">Praesent ut purus fringilla</a>, fringilla nulla eu, dignissim neque.
                Mauris ac turpis vitae augue sagittis laoreet. Sed nulla diam, malesuada a ligula eu, facilisis pharetra eros. Vivamus nec luctus ante, sed rhoncus diam. Pellentesque eleifend sollicitudin neque vitae accumsan. Duis efficitur gravida porttitor.</p>
            <blockquote>Suspendisse egestas luctus gravida. Nulla consectetur sed quam vitae dignissim. Etiam fringilla nisl lectus, sit amet faucibus lacus sagittis vel. Integer cursus velit a est elementum auctor. Cras ut felis a orci gravida pulvinar nec non tortor. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis porta nulla. Proin a nunc quis lacus eleifend tincidunt laoreet nec erat. Cras augue odio, cursus eget dui nec, ullamcorper viverra quam.</blockquote>
            <p>Maecenas placerat, libero id feugiat mattis, libero massa porta felis, ut porttitor augue felis sit amet erat. <a href="#">Maecenas euismod pharetra</a> elit, id pharetra arcu laoreet sed. Integer in accumsan nisi. Nullam et est vehicula, posuere massa
                a, rutrum est. Vestibulum placerat sapien a ligula porta dignissim. Pellentesque ut risus aliquet, suscipit tortor ac, ultricies magna.</p>
        </div>
        <div class="pageitem">
            <h2>Ordered and Unordered Lists</h2>
            <p class="sub">Lists in two columns</p>
            <div class="two-col-cell">
                <h3>Ordered List</h3>
                <ol>
                    <li>First in the list</li>
                    <li>Second one goes here</li>
                    <li>Third item on the list</li>
                    <li>Fourth item here</li>
                    <li>Fifth and some more to go</li>
                    <li>Sixth, just because</li>
                    <li>Seventh item</li>
                    <li>Eighth and nearing the end </li>
                    <li>Ninth and one more to go</li>
                    <li>Tenth and last</li>
                </ol>
            </div>
            <div class="two-col-cell">
                <h3>Unordered List</h3>
                <ul>
                    <li>Nulla consectetur</li>
                    <li>Integer in accumsan nisi</li>
                    <li>Cras augue odio</li>
                    <li>Aliquam lacinia rutrum</li>
                    <li>Vestibulum placerat sapien</li>
                    <li>Pellentesque eleifend</li>
                    <li>Etiam fringilla nisl lectus</li>
                    <li>Proin eleifend sapie</li>
                    <li>Maecenas placerat</li>
                    <li>Praesent ut purus fri</li>
                </ul>
            </div>
        </div>
        <div class="pageitem">
            <h2>Simple Gallery</h2>
            <p class="sub">Images in three columns and unlimited rows.
            <p>Morbi aliquet elit quis viverra lobortis. Mauris ullamcorper neque eget mollis pretium. Cras lacinia dolor a laoreet porta. Aliquam bibendum mattis elit nec tincidunt. Curabitur efficitur sed mauris eget venenatis.</p>
            <div class="three-col-cell gallery">
                <img src="http://placeimg.com/300/200/animals"><br><span class="sub">Random animal by PlaceIMG</span>
            </div>
            <div class="three-col-cell gallery">
                <img src="http://placeimg.com/300/200/arch"><br><span class="sub">Random architecture by PlaceIMG</span>
            </div>
            <div class="three-col-cell gallery">
                <img src="http://placeimg.com/300/200/nature"><br><span class="sub">Random nature by PlaceIMG</span>
            </div>
            <div class="three-col-cell gallery">
                <img src="http://placeimg.com/300/200/people"><br><span class="sub">Random people by PlaceIMG</span>
            </div>
            <div class="three-col-cell gallery">
                <img src="http://placeimg.com/300/200/tech"><br><span class="sub">Random technology by PlaceIMG</span>
            </div>
            <div class="three-col-cell gallery">
                <img src="http://placeimg.com/300/200/any"><br><span class="sub">Random image by PlaceIMG</span>
            </div>
        </div>
        <!-- // -->
    </div>
@endsection
