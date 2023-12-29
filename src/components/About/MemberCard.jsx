function MemberCard({name, text}) {
  return (
    <div className="p-10 rounded-md bg-[#FBFBFB] shadow-md">
      <div className="flex flex-col items-center gap-7 lg:space-x-12">
        <div className="text-xl font-semibold">{name}</div>
        {/* Nesse trecho o json retornado é convertido em HTML */}
        <div dangerouslySetInnerHTML={{ __html: text }} /> </div> 
    </div>
  );
};
 
export default MemberCard;
