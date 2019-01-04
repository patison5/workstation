import React from "react";
import { NavLink } from 'react-router-dom'; 

const NavigationElements = (props) => {


	return (
		<div className="nav__category">
			<li className="nav__element nav__element-title">{props.category}</li>

			{
				props.elements.map((item, index) => {
					// let a = require( { item.iconSrc } );

					return (
						<li className="nav__element" 
							key = { index } 
							style={ { background: `url(` + a + `) no-repeat left center` } }>

							<NavLink className="nav__link" to={item.src}>{item.iconSrc}</NavLink>
						</li>
					)	
				})
			}

		</div>
	);
};

export default NavigationElements;


// style={{backgroundImage: url({require("../images/avatar.png")})}}