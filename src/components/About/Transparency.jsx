import Title from "@/components/Title";
import React, { useEffect, useState } from 'react';
import axios from 'axios';

function Transparency() {
  const [transparencia, setTransparencia] = useState([]);
    useEffect(() => {
        const fetchData = async () => {
          try {
            const url = `${import.meta.env.VITE_REACT_APP_API_ROOT}/transparencia`;
            const response = await axios.get(url);
            setTransparencia(response.data.conteudo);
          } catch (error) {
            console.error('Erro ao buscar membros:', error);
          }
        };
    
        fetchData();
      }, []);
   
  return (
    <div className="flex flex-col space-y-10">
      <Title
        color = "#365314"
        content="Transparência"
      />  
      <div >
        {transparencia.map((e, index)=>(
          // renderiza a string do json para html
          <div key={index} className="space-y-5" dangerouslySetInnerHTML={{ __html: e }}> 
          </div> 
        ))}
      </div>
    </div>
  );
}
export default Transparency;
