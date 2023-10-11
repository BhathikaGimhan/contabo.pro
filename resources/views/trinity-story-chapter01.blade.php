@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/trinity_story_ch.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Trinity Story')
@section('content')
    
    <div class="container-fluid  nav-mobile">
        <div class="dark">
            <div class="row">
                <div class="col-6">
                    <div class="darkheading">THE TRINITY STORY</div>
                    <div class="darkdescription">Written by Arjuna Ranavana</div>
                </div>
                <div class="darkright col-4 text-white">
                    <div class="darklight3">CHAPTER 01:</div>
                    <div class="darklight2">THE TRINITY SPIRIT</div>
                    <a href="{{ route('trinity-story')}}"><div class="darklight1">BROWSE ALL CHAPTERS</div></a>
                </div>
                <div class="col-2 pt-2 text-right">
                    <a class="underline" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="dark" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                        </svg>
                        <div class="aloud pe-3 text-white">READ <br>ALOUD</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom container-fluid nav-mobile">
        <div class="container row">
            <div class="col"><a class="underline" href="{{ route('trinity-story')}}">GO BACK</a></div>
            <div class="col">PAGE OF 
                <input type="text" value="01" class="page ms-1 me-1">
                 254</div>
            <div class="col text-right"><a class="underline" href="{{ route('trinity-story-chapter02')}}">NEXT CHAPTER</a></div>
        </div>
    </div>
    <div class="story container-fluid">
        <div class="pt-5">
            <div class="heading col-8"><span class="headingid"> 1. </span>THE TRINITY SPIRIT</div>
            <div class="subheading container"><span class="subheadingid"> 1.1. </span>The vision </div>
            <div class="contant container">
                <p>Setting out from Great Britain to a distant outpost in South East Asia,
                were visionary men with a dream.</p> 

                <p>They dreamt of building an educational institution that ,
                for generations to come would instill in young men who pass through its doors an indomitable
                spirit; one that would endure through the vicissitudes of time and the rough and tumble of a 
                nation.</p>
                <p>They were Anglican Missionaries who , on setting foot in what was then known as Ceylon
                absorbed the country's culture , and made it the bedrock for their vision that is today, 
                Trinity College.</p>
                <p>The missionaries were able to supported by a host of men and women whose contributions to the school are legendary.</p>
                <p>
                    <figure class="figure1">
                        <div id="myBtn"><img src="assets/images/chap1img1.png" alt="image" class=""></div>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="row">
                                <div class="content-div col-11">
                                    <div class="con-div">
                                        <div class="popupimg"><img src="assets/images/chap1img1.png" alt="image"></div>
                                        <div><b>Portrait Capture of Rev.A.G.Fraser.</b></div>
                                        <div>Source:Trinity Collage Archives</div>
                                    </div>
                                    <div class="text-center"><a class="popunder" href=""> <b>VIEW MORE PICTURES OF REV.A.G.FRASER.</b></a></div>
                                </div>
                                <div class="close col-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                        <figcaption class="border-bottom-1">Portrait Capture of Rev.A.G.Fraser.<br> Source:Trinity Collage Archives</figcaption>
                    </figure>
                </p>
                <p>
                History remembers Rev. A G Fraser , that brilliant Principal who turned this
                little school on the hill in Kandy , into one of the best - known colleges in Sri Lanka today .
                He led and moulded the school for twenty years , before moving to Africa's Gold Coast ,
                Ghana , where he built yet another legendary school named Achimota .</p>
                <p>Rev. Fraser gave education a religious background and sought to synthesize 
                the best of East and West attracting a galaxy of talented men , ranging from Rev. 
                W S Senior , a poet and classics scholar to Rev. L. Gaster , 
                the architect of the the Chapel of the Light of the world .</p> 
                <p>" That is the Trinity College Chapel , an iconic one - of - a - kind Church ,
                     a living , breathing Anglican Christian place of worship.</p>
                <p>Nestled in the curve of the hill that climbs up to the summit on which Trinity College sits , is the simple yet elegant Kandyan - style building that epitomizes that intangible but ever - present Trinity Spirit the men who have ventured forth from the College carry with them . </p>
                <p>The Chapel , about which we will speak in a later chapter in detail , opens out to the Kandy valley on the right and the green lawn on the left , with the Sanctuary in front . A forest " of Granite pillars holds up the ornate Kandyan - style roof .</p>
                <p>Its architecture is compared to the Mahamaluwa , where kilometer or two away the Kandyan kings once held court . That was inspired by the enduring masterpieces of the Polonnaruwa period of Sri Lanka's storied history .</p>
                <p>
                    <figure class="figure2">
                        <div id="myBtn2"><img src="assets/images/chap1img2.png" alt="image" class=""></div>

                    <!-- The Modal -->
                    <div id="myModal2" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="row">
                                <div class="content-div2 col-11">
                                    <div class="con-div2">
                                        <div class="popupimg2"><img src="assets/images/chap1img2.png" alt="image"></div>
                                        <div><b>Capture of the Trinity Collage Chapel, Kandy. 2017</b></div>
                                        <div>Photographed by: David Paynter</div>
                                    </div>
                                    <div class="text-center"><a class="popunder" href=""> <b>VIEW MORE PICTURES OF CHAPEL</b></a></div>
                                </div>
                                <div class="close2 col-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                        <figcaption class="border-bottom-1">Capture of the Trinity Collage Chapel, Kandy. 2017<br> Photographed by: David Paynter</figcaption>
                    </figure>
                </p>

                <p>Trinity lore has it that the design for the Chapel had come to Rev. Gaster in a dream . But , in a speech about the Chapel Rev. Gaster claimed he too had been inspired by what he had seen in Polonnaruwa . </p>
                <p>That was when Rev Gaster had spent a few days in Polonnaruwa . " And what I saw in those days made a deep impression on me . I stood one morning by the tank where the hills came almost up to the tank and were reflected in their clear depths . It was a scene I shall not soon forget : the blue sky overhead and beyond this stretched the silvery stretch of the lovely lake over which flocks of wild birds were constantly passing . And all around us was the untrodden jungle .</p>
                <p>" And then at Polonnaruwa , I stood amongst those remarkable ruins in all their grandeur , their massiveness , and their loveliness , built in wonderful order in the midst of a charmingly beautiful park - like country . In thought , one went back through the centuries and seemed to see those wonderful buildings in their former completeness and the citizens of that remarkable city passing up those flights of steps and gazing with pride and pleasure at those wonderful achievements in stone . And one thought of that great warrior King Parakrama Bahu , and the kings and great men before him and the kings who came after him ; men who built those remarkable cities of Anuradhapura and Polonnaruwa , men with vision and purpose , men with a wonderful power of conception and the power of accomplishment .</p>
                <p>" There are men in Ceylon today with vision and purpose , but we need more such men and our aim in Trinity is to send forth men with the power to conceive and to accomplish them ... then , too , we recognise in those who built these ancient cities , cities full of strength and artistic merit , a great appreciation of the beautiful . I feel that the appreciation of the beautiful is a subject that deserves more attention in our educational work . It not only has an educational value but a considerable moral influence also . The standard of a nation's culture in the past is marked to a great extent by the standard reached in architecture , in painting , in music , in poetry , and literature , and we should spare no efforts to inculcate this appreciation of what is beautiful in the generation of today . The town in which we have met and in which our college is situated is one of the fairest spots on earth and we should cultivate a deepening sense of its natural beauties and jealously guard  them and do what we can to enhance them . "</p>
                <p>Nearly half a century later , another Trinity legendary Vice Principal Hilary Abeyaratne would write in an article to the school's Prize Giving souvenir that " the modern Trinitian we produce must be firmly rooted in his own culture and be able to reach out to the world ."</p>
                <p>That promise has been kept . Mr. Abeyaratne who later migrated to Australia and taught there , instilled in those students too that same spirit . Many others like him have brought pride both to their alma mater and the country . We mention two of them here . </p>
                <p>Jayantha Dhanapala who was an Under - Secretary to the United Nations and an expert on disarmament , and Lakshman Kadirgamar , who as Foreign Minister kept Sri Lanka's flag flying high at the most difficult of times , are amongst the vanguard of men of Trinity , whose influence have impacted both Sri Lanka and the world .</p>
                <p>Indeed , Trinitians have not disappointed the visionaries or those whose unwavering zeal has brought Trinity to the stage it is now ; Soldiers and statesmen , doctors and scientists , artists and architects , IT professionals and sportsmen , they are in every field , fulfilling the dream of those missionaries .</p>

            </div>
            <div class="subheading container pillars"><span class="subheadingid"> 1.2. </span>THREE PILLARS OF TRINITY ETHOS</div>
            <div class="contant container">
                <P>The Trinity College Chapel is the heart of the school and the worshipper entering the building is awed by three evocative murals that illustrate the ethos and spirit of the school .</P>
                <P>Three giant murals painted on granite surround the altar . They are from the Christian Bible's New Testament and tell stories central to Christian teaching . </P>
                <P>On the left is the story of the Good Samaritan , a story Jesus Christ told his followers about the Samaritan , a man not of the Jewish Community and a despised race in that time , who risked his life to tend to a traveling man of commerce , left on the wayside after being beaten and robbed . The Mural shows the Samaritan kneeling by the stricken man tending to him as a Monk , traders and others walk by apparently unheedingly .</P>
                <P>At the center behind the altar , is the biggest Mural , depicting the Crucifixion of Jesus , the three crosses , the Savior's in the middle and the two criminals on either side. Jesus the Son of God offered as a pure sacrificial lamb for the sins of man flanked by sinners . The dramatic painting is the dominant one . </P>
                <P>On the right of the Altar is the painting of Jesus , washing the feet of his disciples at the Last Supper before he was arrested and taken to trial. The Disciple whose feet Jesus is seen washing is believed to be that of St Peter . This Biblical story is the depiction of ultimate humility , the Master washing the feet of his Disciples . </P>
                <P>In all these paintings by David Paynter , one of the finest artists produced by Sri Lanka , and an Old Boy of Trinity , the settings are Sri Lankan. Paynter is said to have used members of the staff and strangers he saw on the streets of Kandy as his models . Jesus is a clean - shaven , an olive - skinned man we may meet in Kandy town any day then and now .</P>
                <P>None are conventional paintings . The crucifixion is not shown on the bleak desert hill of Golgotha , but in a lush Mangrove Forest taken from the shores of Sri Lanka . Christ is beardless and so are the two men on either side . One of them , a young lad , could be a senior TCK student and he is looking heavenward and depicts the robber who asked for forgiveness and was promised by Jesus that he will join him in heaven . </P>
                <P>The three paintings also embody the core values that Trinity seeks to instill in the boys during their school years . The story of the Good Samaritan teaches the important value of service , the Washing of the Feet of the Apostles by the Lord , Selflessness , and the Crucifixion the principle of Equality .</P>
                <P>The Co - Vice Principal of Trinity in the sesquicentennial year Antonydas Krishanthan says the formation of the Trinitian aims at producing Christ like gentlemen. As a school and staff " we need to soul search there and ask ourselves are we producing men who are arrogant of their achievements or gentlemen who are Christ - like in their character ? We can produce an excellent army general who can be an arrogant man Then there is no point , he has to be of service . </P>
                <P>" The good Samaritan , the Crucifixion and the washing of the feet , selfiessness , service , and equality . These are the co - values that we should instill in them. The chapel is the heart of the school this is the connection between the past and the future . The vision should be the driving force of all that we do so that we don't produce monsters , rather we produce gentlemen . "</P>
                <P>Kenneth Congreve , Senior Prefect and Ryde Gold Medalist in 1977 , says these values translated into life values for himself . " Honesty , Decency , Fairness , being Honourable , respecting all beings , regardless of Race , Religion , Colour , Build , where they came from or what the financial and other circumstances of their parents were , " he says . He also says this has meant gaining friends across the entire spectrum of colours and races in Sri Lanka . These values and the fact of living together with diverse Trinitians over 14 years in the College Hostels , from the Matron's Dorm , through Junior School , Squealery , Ryde and Alison had firmed up the formation as a Trinitian . </P>
                <P>" More than anything , these learnings have helped me personally , in my own life . I can live with myself and sleep well every night , knowing that I have been true to myself. " Congreve adds. </P>
                <P>Unfortunately , these values are often not appreciated in the commercial world . where compromise of values is either expected or demanded if one is " suitable " for " higher positions ! But I can live with that.</P>
                <P>While the influence of parents cannot be discounted , the guiding hands of our Teachers , particularly during our tender , formative years , played a major role in moulding our values in life.</P>
            </div>
        </div>
        <div class="hrdev"><hr></div>
        <div class="next container">
            <a class="tored underline" href="{{ route('trinity-story-chapter02')}}">
                <div class="next1">
                    READ NEXT
                </div>
                <div class="next2">
                    CHAPTER 2:
                </div>
                <div class="next3">
                    THE FIRST HUNDRED YEARS
                </div>
            </a>
        </div>
        <div class="gototop tored col text-right text-dark">
            <a href="#top">
                GO TO TOP
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="bottom container-fluid nav-mobile">
        <div class="container row">
            <div class="col"><a class="underline" href="{{ route('trinity-story')}}"> GO BACK</a></div>
            <div class="col">PAGE OF 
                <input type="text" value="01" class="page ms-1 me-1">
                 254</div>
            <div class="col text-right"><a class="underline" href="{{ route('trinity-story-chapter02')}}">NEXT CHAPTER</a></div>
        </div>
    </div>



<script>
    // Get the modal
    var modal1 = document.getElementById("myModal");
    var modal2 = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn");
    var btn2 = document.getElementById("myBtn2");

    // Get the element that closes the modal
    var span1 = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal 
    btn1.onclick = function() {
        modal1.style.display = "block";
    }
    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>

@section('assets-js')
 <script src="{{ asset('assets/js/trinity_story_ch.js') }}"></script>
@endsection

@endsection
