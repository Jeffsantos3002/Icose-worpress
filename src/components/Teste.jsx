import React, {useEffect, useState} from 'react';
import axios from 'axios';

const Teste = () => {
    const [posts, setPosts] = useState([]);
    useEffect(()=>{
        const url = `${import.meta.env.VITE_REACT_APP_API_ROOT}/membros`;
        console.log(url);
        axios.get(url).then((res)=>{
            setPosts(res.data);
        });
    }, []);
    return (
      <div className="text-xl pb-10 pt-10 mx-auto max-w-[80rem] px-6">
        {
        posts && posts.map((post, index) => {
            console.log('post', post);
            return (
            <div key={index} className='flex flex-col'>
                <h3>Post {index}</h3>
                <p>{post.titulo}</p>
            </div>
            );
        })
        }

      </div>
    );
  };
  
  export default Teste;