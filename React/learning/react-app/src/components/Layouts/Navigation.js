import React from "react";
import { NavLink } from 'react-router-dom'; 

const Navigation = () => {
  return (
    <ul className="navigation__wrap">
    	<li className="nav__element nav__element-title">Управление</li>
		<li className="nav__element"><NavLink className="nav__link" to="/">Главная</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/pages">Страницы</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/posts">Посты</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/users">Пользователи</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/media">Медиа</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/tools">Инструменты</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/themes">Темы</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/plugins">Плагины</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/settings">Настройки</NavLink></li>
		
		<li className="nav__element nav__element-title">Профиль</li>
		<li className="nav__element"><NavLink className="nav__link" to="/profile/articles">Мои статьи</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/profile/messages">Сообщения</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/profile/comments">Комментарии</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/profile/calendar">Календарь</NavLink></li>
		<li className="nav__element"><NavLink className="nav__link" to="/profile/settings">Редактировать</NavLink></li>
    </ul>
  );
};

export default Navigation;



