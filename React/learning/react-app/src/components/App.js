import React, { Fragment } from 'react'
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import { Header, Footer, Navigation } from './Layouts'
import { Home, Error, Posts, Users, Media, Tools, Themes, Plugins, Settings, Pages } from './Pages'

class App extends React.Component {
	handleClicked = evt => console.log('clicked')

	render () {
		return <BrowserRouter>
			<div>
				<Navigation />

				<Switch>
					<Route path="/" component={Home} exact />
					<Route path="/posts" component={Posts} />
					<Route path="/pages" component={Pages} />
					<Route path="/users" component={Users} />
					<Route path="/media" component={Media} />
					<Route path="/tools" component={Tools} />
					<Route path="/themes" component={Themes} />
					<Route path="/plugins" component={Plugins} />
					<Route path="/settings" component={Settings} />

					<Route component={Error} />
				</Switch>
			</div>
		</BrowserRouter>
	}
}

export default App