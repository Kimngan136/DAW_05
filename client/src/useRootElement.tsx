import { useRoutes } from 'react-router-dom'

export default function useRootElement() {
  const routeElements = useRoutes([
    {
      path: '',
      index: true,
      element: ''
    }
  ])
  return routeE`lements
}
