import React from "react";
import { NavLink } from 'react-router-dom'; 

const NavigationElements = (props) => {


	return (
		<div className="nav__category">
			<li className="nav__element nav__element-title">{props.category}</li>

			{
				props.elements.map((item, index) => {
					return (
						<li className="nav__element" key = { index }>
							<i 
								style = {{ 
									background: `url(` + require(`../images/icons/${item.iconSrc}`) + `) no-repeat left center`,
									backgroundSize: 'cover'
								}}

								className="nav__element-icon"
							/>
							<NavLink className="nav__link" to={item.src}>{item.title}</NavLink>
						</li>
					)	
				})
			}

		</div>
	);
};

export default NavigationElements;