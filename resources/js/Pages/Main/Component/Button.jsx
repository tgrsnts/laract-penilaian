import React from 'react'

const Button = (props) => {
  return (
    <div>
        <a href={props.href}>{props.title}</a>
    </div>
  )
}

export default Button