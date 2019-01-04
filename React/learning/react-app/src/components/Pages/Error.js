import React from 'react';
import { Header, Footer } from './../Layouts'

const Error = ({ location }) => {
  return (
    <div className="main-content__wrap">
		<Header />

		<div className="main-content">
			<p>Error</p>
		</div>
	</div>
  );
};

export default Error;