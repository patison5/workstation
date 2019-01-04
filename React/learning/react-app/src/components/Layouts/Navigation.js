import React from "react";
import Logo from '../images/logo.png';


import NavigationElements from './NavigationElements'
import MenuList from '../server/menuList';

class Navigation extends React.Component {

	createListItems() {

		return MenuList().map((item, index) => {
			return ( 
				// <li key={index}>{item.category}</li>

				<NavigationElements key={index} category={item.category} elements={item.elements} />
			);
		})
	}


	render() {

		return (
			<div className="navigation__wrap">
				<img src={Logo}  alt={Logo}  className="navigation__logo"/>

				<ul className="navigation__list">

					{this.createListItems()}

			    	
			    </ul>
			</div>
		);
	}
};

export default Navigation;



