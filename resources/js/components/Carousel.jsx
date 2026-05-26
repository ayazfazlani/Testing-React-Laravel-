import React from 'react'
import Slider from "react-slick";
import { arr } from "../assets/imageExport"

// --- ADD THESE TWO LINES TO FIX THE VISUAL ISSUE ---
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

const Carousel = () => {
    var settings = {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 3000,
        autoplaySpeed: 3000,
        adaptiveHeight: true,
        cssEase: "ease-in"
    };
    return (
        <div className='max-w-[90%] mx-auto overflow-hidden'> {/* Added overflow-hidden to prevent layout breaking before load */}
            <Slider {...settings}>
                <div>
                    <img src={arr[0]} alt="slides" className="w-full object-cover" />
                </div>
                <div>
                    <img src={arr[1]} alt="slides" className="w-full object-cover" />
                </div>
                <div>
                    <img src={arr[2]} alt="slides" className="w-full object-cover" />
                </div>
                <div>
                    <img src={arr[3]} alt="slides" className="w-full object-cover" />
                </div>
                <div>
                    <img src={arr[4]} alt="slides" className="w-full object-cover" />
                </div>
            </Slider>
        </div>
    )
}

export default Carousel
