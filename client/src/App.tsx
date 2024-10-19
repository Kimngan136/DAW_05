import useRootElement from './useRootElement'

function App() {
  const routesElements = useRootElement()
  return <div>{routesElements}</div>
}

export default App
