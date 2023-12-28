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
      <div className="space-y-5">
        {transparencia.map((e, index)=>(
          <div key={index}>
            <p> {e} </p>
          </div>
        ))}
      </div>
    </div>
  );
}
export default Transparency;
